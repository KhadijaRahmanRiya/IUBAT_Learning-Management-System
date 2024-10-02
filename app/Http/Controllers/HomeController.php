<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Order;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $course =Courselist::all()->count();
        $totaluser = User::get()->count();
        $totalEnroll = Order::get()->count();
        $teacher =Teacher::all()->count();
        

        return view('backend.pages.dashboard.dashboard',compact('totaluser','totalEnroll','course','teacher'));
    }
}
