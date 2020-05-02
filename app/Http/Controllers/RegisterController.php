<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view('AuthFolder.register');
    }

    public function store(Request $request) {
        $this->validation($request);

         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
             'role' =>'user',
             'phonenumber'=>$request['phonenumber'],
        ]);

        return redirect('/register')->with('Status','Useri u rregjistrua me sukses.');
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
            'phonenumber'=>'required|integer|min:7|',
        ]);
    }

    function check(Request $request)
    {

        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table("users")
                ->where('email', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }



}