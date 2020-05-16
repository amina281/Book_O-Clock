<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index() {

        if (Auth::check()) {
            return view('UserProfile.User');
        }


    }
}
