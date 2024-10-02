<?php

namespace App\Http\Controllers;

use App\Models\attendExam;
use App\Models\question;
use App\Models\Courselist;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function question($id){
        $courses=Courselist::find($id);
        return view('backend.pages.question.add',compact('courses'));
    }

    public function store(Request $request){

        // dd($request->all());
        $data = $request->option;
        $values = implode(',', $data);
        question::create([
            'teacher_id' => auth()->user()->id,
            'course_id' => $request->course_id,
            'question'=> $request->question,
            'answer' => $request->answer,
            'option' => $values,
        ]);
        return redirect()->back();
    }


    public function view($id){
        $courses=Courselist::find($id);
        $qsn=question::where('course_id',$id)->get();
        // $single = Question::with('exam')->where('exam_id', $id)->get();
        return view('backend.pages.question.list',compact('qsn'));
    }


    public function exam($id){
        $courses=Courselist::find($id);
        $exam=question::where('course_id',$id)->get();
        return view('backend.pages.question.exam.attend_exam',compact('exam'));
    }


    public function examStore(Request $request){
        // dd($request->all());
        $courses=Courselist::where('id',$request->course_id)->first();
        $data = $request->answer;
        $values = implode(',', $data);
        attendExam::create([
            'question_Id' =>$request->question_Id,
            'course_id' => $request->course_id,
            'student_id' => $request -> student_id,
            'answer' => $values,

        ]);
        toastr()->Success('your answer submited');
        return redirect()->route('lecture.web',$courses->id);
    }
}
