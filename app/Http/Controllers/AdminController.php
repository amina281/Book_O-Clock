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

    public function addPost(Request $request){
        $this->validation($request);

            $post = new User;
            $post->name = $request->name;
            $post->email = $request->email;
            $post->password = Hash::make($request->password);
            $post->verified =true;
            $post->email_verified_at= Carbon::now();
            $post->role ='user';
            $post->save();
            return response()->json($post);

    }

    public function editPost(request $request){
        $post = User::find ($request->id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->save();
        return response()->json($post);
    }

    public function deletePost(request $request){
        $post = User::find ($request->id)->delete();
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
