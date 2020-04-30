<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('AuthFolder.login');
    }
    public function store(Request $request) {

        $this->validation($request);
        //$user = DB::table('users')->where('email', $request->email)->first();
        if (Auth::attempt(
            ['email' => $request->email,
            'password' => $request->password])) {
            return view('AuthFolder.home');
        } else {
            return view('AuthFolder.login')->with('Status', 'Your credentials dont match our records');
        }

    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request)
    {
        if(Auth::check())
        {
            Auth::logout();
            $request->session()->invalidate();
        }
        return view('AuthFolder.login');
    }
}