<?php

namespace App\Http\Controllers;

use App\AddToBookshelf;
use Session;
use Post;
use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;

class BookshelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.bookshelf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $book_id)
    {
        $this-> validate($request,[
            'name' => 'required'
        ]);

        $bookshelf = new AddToBookshelf();
        $bookshelf->book_id = $book_id;
        $bookshelf->name = $request->name;
        $bookshelf->save();

        Session::flash('success', 'Comment Successfully Published');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($slug)
    {
        //
    }

}
