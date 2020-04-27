<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('custom.register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::Create($request->all());
        return redirect('/')->with('Status','You are registered successfully.');
    }

    public function  validation($request)
    {
        return $this->validate($request,[
                    'Email'=>'required|email|unique:users|max:255',
                    'Username'=>'required|max:255',
                    'Role'=>'required|max:255',
                    'PhoneNumber'=>'required',
                    'password'=>'required|confirmed|max:255',
                ]);
    }

}
