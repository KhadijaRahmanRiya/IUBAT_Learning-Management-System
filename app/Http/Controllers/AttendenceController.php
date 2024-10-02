<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
public function attendence()

    {
      $attendences=Attendence::where('student_id',auth()->user()->id)->get();
      // dd( $attendences[0]->out_time);

    return view('backend.pages.attend.attend',compact('attendences'))->with('data', $attendences);
}
public function store(Request $request)
    {
      Attendence::create([
      'student_id'=>$request->student_id,
      'date'=>$request->date,
      'status'=>'pending',
      ]);
      return redirect()->route('attendence.list');

    }
    public function present($id)
    {
        $isAttendence = Attendence::whereDate("date",now())->where("student_id",auth()->user()->id)->first();
//dd($isAttendence);
      $attendence= Attendence::findOrFail($id);
      $attendence->status='present';
      $attendence->save();
      Attendence::create([

        'date'=>date('Y-m-d'),
        'user_id'=>auth()->user()->id

      ]);
      toastr()->success('Present');
    return redirect()->route('attendence');
    }
    public function absent($id)
    {
      $absent= Attendence::findOrFail($id);
      $absent->status='absent';
      $absent->save();
      toastr()->success('absent');
    return redirect()->route('attendence');
    }

public function create()
{    $students=Student::all();
    return view('backend.pages.attend.attend_date',compact('students'));
}


}


