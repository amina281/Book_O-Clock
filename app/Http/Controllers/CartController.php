<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::has('cart')){

        return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart= new Cart($oldCart);
        return view('pages.cart',
            [
                'products' => $cart->items,
                'totalPrice' =>$cart->totalPrice,
                'totalQty' =>$cart->totalQty,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Book  $id
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
        $product =DB::table('books')->where('ISBN',$id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index')->with('success_message','Item was added to your cart!');
    }


}
