<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration(){
        $roles=Role::where('name', '!=',  'Admin')->get();
        // dd($roles);
        return view('website.registration.registration',compact('roles'));
    }
    public function registrationStore(Request $request)
    {

        User::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'Institution'=>$request->Institution,
        'password'=>bcrypt($request->password),
        'role_id'=>$request->role_id

       ]);
       toastr()->success('Registration Success','Success');

       return redirect()->route('login');


    }

    public function dashboard()
        {
            $course =Courselist::all()->count();
            $totaluser = User::get()->count();
            $totalEnroll = Order::get()->count();

            return view('backend.pages.dashboard.dashboard',compact('totaluser','totalEnroll','course'));
        }



}
