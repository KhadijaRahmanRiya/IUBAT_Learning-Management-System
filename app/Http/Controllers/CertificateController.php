<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function certificateList($id)
    {

        $courseExists = Certificate::where("courselist_id", $id)->where("user_id", auth()->user()->id)->get();

        if ($courseExists->count() > 0) {
            toastr()->error("error", "Already Completed");
            return back();
        }
        $course =  Certificate::create([
            "user_id" => auth()->user()->id,
            "courselist_id" => $id,
            "status" => "complete"
        ]);

        if ($course) {
            toastr()->success("success", "Successfully Completed the course");
            return back();
        }
    }
    public function certificate_generate($id)
    {

        $course =  Certificate::with(['user', 'course'])->find($id);

        return view('website.pages.lecture.certificate', compact('course'));
    }
}
