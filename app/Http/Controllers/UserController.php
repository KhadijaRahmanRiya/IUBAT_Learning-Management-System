<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function home()
    {
        return view('backend.master');
    }

    public function login()
    {
        return view('backend.pages.login');
    }
    public function doLogin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        if ($validate->fails()) {

            return redirect()->back();
        }

        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {

            if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
                if(auth()->user()->status == 1){
                    return redirect()->route('dashboard');
                }
            }
             else {
               return redirect()->route('website');
             }
        }
    }
    public function logout()
    {
        auth()->logout();
        toastr()->Success('Log out');
        return redirect()->route('login');
    }
}
