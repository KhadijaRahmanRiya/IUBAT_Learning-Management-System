<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Courselist;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    public function list()
    {
        $students = Student::with("teacher")->paginate(5);

        return view('backend.pages.student.list', compact('students'));
    }

    public function form()
    {

        $coures = Courselist::all();
        $teachers = Teacher::all();
        return view('backend.pages.student.form', compact('coures', 'teachers'));
    }
    public function store(Request $request)
    {

        $fileName = '';
        if ($request->hasFile('student_image')) {
            $fileName = date('Ymdhis') . '.' . $request->file('student_image')->getClientOriginalExtension();
            $request->file('student_image')->storeAs('/uploads', $fileName);
        }

        Student::create([
            'student_name' => $request->student_name,
            'courselists_id' => $request->courselists_id,
            'teacher_id' => $request->teacher_id,
            'student_email' => $request->student_email,
            'student_mobile' => $request->student_mobile,
            'student_address'=>$request->student_address,
            'student_image' => $fileName,
            'student_gender' => $request->student_gender,


        ]);
        return redirect()->route('student.list');
    }
    public function view($id)
    {
        $student = Student::find($id);
        
        return view('backend.pages.student.view', compact('student'));
    }
    public function delete($id)

    {
        Student::find($id)->delete();

        return redirect()->back();
    }
}
