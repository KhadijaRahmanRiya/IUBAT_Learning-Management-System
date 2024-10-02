<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use Illuminate\Http\Request;

class LectureController extends Controller
{
   public function lecture()
   {
     $lecture=Courselist::all();
    return view('website.pages.lecture.lecture_content',compact('lecture'));
   }
}
