<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Comment;
use App\Model;
//use Illuminate\Support\Facades\Session;
use Session;
use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $products = Book::all();
        return view('pages.shop')->with('products', $products);

    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($slug)
    {
        $product = Book::where('slug','=' ,$slug)->first();

        $mightAlsoLike = Book::where('slug', '!=', $slug)->inRandomOrder()->take(6)->get();

        $comment = Comment::where('post_id','=', $slug)->first();;

        return view('pages.product')->with(compact('product','mightAlsoLike','comment'));
          /*  ->with([
                'product' => $product,
                'mightAlsoLike' => $mightAlsoLike,
                'comment' => $comment,
            ]);*/
        return view('pages.product', compact('product','mightAlsoLike','comment'));
        /*  ->with([
              'product' => $product,
              'mightAlsoLike' => $mightAlsoLike,
              'comment' => $comment,
          ]);*/
    }

}
