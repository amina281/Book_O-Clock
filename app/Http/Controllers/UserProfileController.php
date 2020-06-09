<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index()
    {
            return view('UserProfile.User');
    }

    public function GetUserData()
    {

        $user = Auth::user();

        $Orders = DB::table('Shopping_Cart_Header')
            ->where(['CustomerId' => $user->id])->get() ;

        if($Orders->count() == 0)
            return view('UserProfile.User', compact('user'),['EmptySet'=>'You have not done any orders yet!']);


        return view('UserProfile.User', compact('user','Orders'),['EmptySet'=>'']);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $this->validation($request);

        $user->name = $request['Username'];

        if($request->password != '')
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
