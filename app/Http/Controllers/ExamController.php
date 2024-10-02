<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function list()
    {
        $exams = Exam::all();
        return view('backend.pages.exam.exam_list',compact('exams'));
    }
    public function create()
    {
        return view('backend.pages.exam.exam');
    }
    public function store(Request $request)

    {

        $fileName='';
        if($request->hasFile('filename'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('filename')->getClientOriginalExtension();
            $request->file('filename')->storeAs('/uploads',$fileName);
        }
        Exam::create([


            'filename'=>$fileName,


        ]);


        // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',

        // $fileName = time() . '.' . $request->file->extension();

        // $file_path = $request->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
