<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
    if (Auth::check() == false){
        return view('AuthFolder.login');
    }
    else{
        return view('AuthFolder.home');
    }
    }

    public function store(Request $request) {

        $this->validation($request);


        if (Auth::attempt(
            ['email' => $request->email,
            'password' => $request->password,
            'verified'=> true],true
            )) {

              //deklarim i objektit user, mund te kete dhe emer tjeter.

            $user = DB::table('users')->where('email', $request->email)->first();

            if($user->role === 'admin')
            {
                return view('AuthFolder.admin');
            }
            else
                {
                   //return view('AuthFolder.home');
                    return redirect('/home');
                }
        }
        else
            {
            return redirect('/login')->with('Status', 'Password ose email jo i sakte/ose email jo i verifikuar.');
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

    public function HomePage()
    {
       return view('AuthFolder.home');
    }
}