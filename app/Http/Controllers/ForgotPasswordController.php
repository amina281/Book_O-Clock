<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Mail;

class ForgotPasswordController extends Controller
{
    public function getEmail()
    {

        return view('AuthFolder.passwords.email');
    }

    public function postEmail(Request $request)
    {
       $this->validation($request);

        $token = str_random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('AuthFolder.verify', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset i password');
        });

        return redirect('/forget-password')->with('Status', 'Reset link!');
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'email' => 'required|email|exists:users',
        ]);
    }
}