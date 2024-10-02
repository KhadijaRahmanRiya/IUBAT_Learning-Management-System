<?php

namespace App\Http\Controllers;

use App\Models\attendExam;
use App\Models\User;
use App\Models\Video;
use App\Models\Teacher;
use App\Models\Courselist;
use App\Models\Certificate;
use App\Models\Progress;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function list()
    {
        $video = Video::all();
        return view('backend.pages.video.videolist', compact('video'));
    }

    public function create()
    {
        $courselist = Courselist::all();
        $teacher = User::where('role_id', 2)->get();
        return view('backend.pages.video.video_form', compact('courselist', 'teacher'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        if ($request->hasFile('video')) {
            foreach ($request->video as $data) {
                $videoName = '';
                $videoName = date('Ymdhis') . '.' . $data->getClientOriginalExtension();
                $data->storeAs('/uploads', $videoName);
                Video::create([
                    'title' => $request->title,
                    'courselists_id' => $request->courselists_id,
                    'teacher_id' => $request->teacher_id,
                    'description' => $request->description,
                    'filename' => $videoName,
                ]);
            }
        }





        return redirect()->route('upload.list')
            ->with('success', 'Video uploaded successfully.');
    }

    public function lecture($id)
    {

        $course = Courselist::with('videos')->find($id);
        $exam = attendExam::where('course_id', $course->id)->where('student_id', auth()->user()->id)->first();


        $certificate = Certificate::where("courselist_id", $id)->where("user_id", auth()->user()->id)->first();
        // dd($certificate);


        $progress = Progress::first();
        //  var_dump($progress);
        return view('website.pages.lecture.lecture_content', compact('course', "certificate", 'progress', "exam"));
    }




    public function progressPost(Request $request)
    {
        // dd('something');
        //  var_dump($progress);
        $progress = Progress::where('course_id', $request->course_id)
            ->where('user_id', auth()->user()->id)->first();
        if ($progress) {
            if ($progress->progress_percent < $request->currentTime) {
                $complete = false;
                if ($progress->progress_percent == $request->duration) {
                    $complete = true;
                }

                $progress->update([
                    'progress_percent' => $request->currentTime,
                    'complete' => $complete
                ]);
                return true;
            }
            return true;
        }

        Progress::create([
            'user_id' => auth()->user()->id,
            'course_id' => $request->course_id,
            'content_id' => 1,
            'complete' => false,
            'progress_percent' => $request->currentTime,
            'duration' => $request->duration
        ]);


        return true;
    }

    // public function lecture($id)
    // {

    //     $course = Courselist::with('videos')->find($id);
    //     $exam=attendExam::where('course_id',$course->id)->where('student_id',auth()->user()->id)->first();

    //     // dd($exam->answer);

    //     $certificate = Certificate::where("courselist_id", $id)->where("user_id", auth()->user()->id)->first();
    //     // dd($certificate);
    //     return view('website.pages.lecture.lecture_content', compact('course', "certificate","exam"));


    // }
}
