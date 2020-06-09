<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Book::inRandomOrder() -> take(8) -> get();

        return view('pages.landing-page');
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $product = Book::where('Title', 'like', "%$query%")->get();

        return view('pages.search-result')->with('products', $product);
    }

}
