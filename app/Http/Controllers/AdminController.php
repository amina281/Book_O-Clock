<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use http\Client\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $post = User::paginate(4);
        return view('Admin.ManageUsers',compact('post'));
    }

    public function addUser(Request $request){
        $this->validation($request);

            $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verified =true;
        $user->email_verified_at= Carbon::now();
        $user->role ='user';
        $user->save();
            return response()->json($user);

    }

    public function editUser(request $request){
        $user = User::find ($request->id);

      //  $this->validation($request);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
       // $post->verified = $request->verified;
        $user->save();
        return response()->json($user);
    }

    public function deleteUser(request $request){
        $user = User::find ($request->id)->delete();
        return response()->json();
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }
}
