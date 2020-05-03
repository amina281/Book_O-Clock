<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB; use App\User;
use Hash;

class ResetPasswordController extends Controller {

    public function index() {

        return view('AuthFolder.passwords.reset');
    }
    public function getPassword($token) {

        return view('AuthFolder.passwords.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request) //si request email token psw
    {

       $this->validation($request);

        $updatePassword = DB::table('password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();

        if(!$updatePassword)//nqs  nuk ka rekord
            return redirect('/login')->with('Status', 'Password not changed ,Invalid token!');

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('Reset', 'Your password has been changed!');

    }
    public function  validation($request)
    {
        return $this->validate($request,[
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
    }
}