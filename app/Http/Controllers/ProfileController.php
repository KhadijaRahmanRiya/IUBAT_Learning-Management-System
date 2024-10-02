<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        //  $courses = Courselist::where('user_id', auth()->user()->id)->get();
        // for naming the course in profile where course are coming

        //
        $courses = Order::where('user_id', auth()->user()->id)->get();
        return view('website.pages.profile', compact('courses'));
    }
    public function enrollCourses()
    {
        //  $courses = Courselist::where('user_id', auth()->user()->id)->get();
        // for naming the course in profile where course are coming

        //
        $courses = Order::where('user_id', auth()->user()->id)->get();
        return view('website.pages.enroll_courses', compact('courses'));
    }
    public function enrollment($id)
    {
        // dd($id);
        $course = Courselist::find($id);
        $courselist = Order::where('courselist_id', $course->id)->where('user_id', auth()->user()->id)->exists();
        if ($courselist) {
            toastr()->success('Already Enrolled');
            return redirect()->route('profile');
        }

        return view('website.pages.enrollment', compact('course'));
    }
    public function order($id)
    {
        $courselist = Courselist::find($id);
        return view('website.pages.order', compact('courselist'));
    }
    public function orderStore(Request $request)
    {
        // dd($request->all());

        Order::create([
            'user_id' => auth()->user()->id,
            'courselist_id' => $request->courselist_id,

            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        toastr()->success('Enroll Success');
        return redirect()->route('profile');
    }
}
