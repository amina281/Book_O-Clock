<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
}
