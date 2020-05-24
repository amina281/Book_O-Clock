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
        $this->validate($request, array(
            'addBookshelf' => 'required|min:5|max:100'
        ));

        $bookshelves = DB::table('Books')->where('slug', $book_id)->first();

        $id = $book->ISBN;

        $add = new AddToBookshelf();
        $add-> name = $request->addBookshelf;
        $add->post()->associate($id);

        $add->save();

        Session::flash('success', 'Book was added to bookshelf .');
        return  redirect()->route('product.show',[ $add->slug]);

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
