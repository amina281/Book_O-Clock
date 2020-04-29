<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    public function index() {

        return view('AuthFolder.login');
    }
    public function store(Request $request) {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user->email === $request->email) {
            return redirect('/home');
        } else {
            return back()->with('error', 'Your credentials dont match our records');
        }

    }
}