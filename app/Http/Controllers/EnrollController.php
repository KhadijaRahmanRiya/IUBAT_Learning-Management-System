<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function enroll()
    {

        //$students =Order::where('role','student')->get();

        $students = Order::all();

        return view('backend.pages.enroll_course',compact('students'));
        
    }
}
