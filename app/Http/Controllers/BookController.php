<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

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
        $product = Book::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Book::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view('pages.product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
