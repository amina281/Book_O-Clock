<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;

class UserProfileController extends Controller
{
    public function index()
    {
            return view('UserProfile.User');
    }

    public function GetUserData()
    {
        $user = Auth::user();

        return view('UserProfile.User', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $this->validation($request);

        $user->name = $request['Username'];

        $user ->password = Hash::make($request['password']);

        $user->save();
        return redirect('/user')->with('success', 'User has been updated!!');
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'Username' => 'required',
            'password' => 'required',
            'phonenumber'=>'required',
        ]);
    }
}
