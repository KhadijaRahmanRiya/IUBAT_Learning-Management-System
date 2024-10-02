<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Courselist;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website()
    {
        // dd(auth()->user());
        $teachers = Teacher::all();
        $categories = Category::all();
        return view('website.pages.home', compact('categories', 'teachers'));
    }


    public function course()
    {
        $teachers = Teacher::all();
        $courses = Courselist::all();
        return view('website.pages.course', compact('courses', 'teachers'));
    }
    public function contact()
    {

        return view('website.pages.contact');
    }
}
