<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index() {

        return view('AuthFolder.register');
    }

    public function store(Request $request)
    {
        $this->validation($request);

         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
             'role' =>'user',
             'phonenumber'=>$request['phonenumber'],
        ]);

        $this->verifyEmail($request->email); //funksion i cili dergon emailin e verifikimit

        return redirect('/register')->with('Status', 'Verification link is send to  your email!');
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

     function verifyEmail($email)
    {
        $token = str_random(64);

        DB::table('password_resets')->insert(
            //fusha e emailit mbushet me emailin qe na vjen si request
            ['email' => $email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('AuthFolder.validateAccount', ['token' => $token,'email' =>$email], function($message) use($email){
            $message->to($email);
            $message->subject('Verifikimi i  adreses');
        });

    }

    public  function updateEmail(Request $request)
    {


        $updateusers = DB::table('password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();

        if(!$updateusers)
            return redirect('/login')->with('Status', 'Email not verified ,Invalid token!');

        $user = User::where('email', $request->email) //kontrollo ne db ku emaili eshte i = me ate qe vjen
            ->update(['email_verified_at' => Carbon::now(),'verified' => true]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('Reset', 'Email is verified! Now you can log in!');
    }

    public function getInfo($token,$email)
    {

        return view('AuthFolder.verifyAccount', ['token' => $token,'email'=>$email]);
    }




}