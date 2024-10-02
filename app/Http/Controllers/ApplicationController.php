<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        $teachers=User::where('role_id',2)->where('status', 0)->get();
        // dd($teachers);
        return view('backend.pages.application.index',compact('teachers'));
    }
    public function edit($id){
        $teacher=User::find($id);
        return view('backend.pages.application.edit',compact('teacher'));
    }
    public function update(Request $request,$id){
        $teacher=User::find($id);
        $teacher->update([
            'status'=>$request->status,
        ]);
        return to_route('backend.application.index');
    }
}
