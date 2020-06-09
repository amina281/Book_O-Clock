<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     *@param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function store($slug)
    {
        $product = Book::where('slug','=' ,$slug)->first();

        if(!$product){
            abort(404);
        }

        $cart = session()->get('cart');

        //if cart is empty then this is the first item
        if (!$cart){
            $cart = [
                $slug => [
                    "name" => $product->Title,
                    "quantity" => 1,
                    "price" => $product->Price,
                    "photo" => $product->imagePath
                ]
            ];
            session()-> put('cart', $cart);
            return back()->with('success', 'Product added to cart successfully!');
        }

        //if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$slug])){
            $cart[$slug]['quantity']++;
            session()->put('cart', $cart);
            return back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$slug] = [
            "name" => $product->Title,
            "quantity" => 1,
            "price" => $product->Price,
            "photo" => $product->imagePath
        ];

        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart successfully!');
    }

}
