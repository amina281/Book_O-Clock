<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
      //  $user = User::find ($request->id);
          $user = Auth::user();
        //  $user->name = $request->name;
        //  $user->email = $request->email;


        $this->validate($request, array(
            'comment' => 'required|min:5|max:2000 '
        ));

        $post = DB::table('Books')->where('slug', $post_id)->first();

        $post_id = $post->slug;

        $comment = new Comment();

        $comment->name = $user->name;
        $comment->email = $user->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post()->associate($post_id);

        $comment->save();

        Session::flash('success', 'Comment was added .');
        return  redirect()->route('product.show',[ $post->slug]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
