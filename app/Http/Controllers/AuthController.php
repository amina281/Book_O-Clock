<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    /* @GET
     */
    public function loginForm()
    {
        return view('custom.login');
    }

    /* @POST
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request){



        if (Auth::attempt([
            'Email' => $request->Email,
            'password' => $request->password])
        )
        {
            return redirect()->intended('dashboard');
        }

        return redirect()->route('custom.login')->with('Status', 'Invalid Email address or Password');
    }
    /* GET
    */
    public function logout(Request $request)
    {
        if(Auth::check())
        {
            Auth::logout();
            $request->session()->invalidate();
        }
        return redirect()->route('custom.login');
    }
}
