<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        $duplicates = Cart::search(function($cartItem, $rowId) use ($product){
            return $cartItem->id === $product->ISBN;
        });

        if($duplicates->isNotEmpty()){
            return back()->with('success_message','Item is already in your cart!');
        }

        Cart::add( $product->ISBN, $product->Title, 1, $product->Price)
             ->associate('App\Product');
        return back()->with('success_message','Item was added to your cart!');

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
       Cart::remove($id);
           return back()->with('success_message','Item has been removed!');
    }

    /**
     * Switch item for shopping cart to Save for Later.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Saved For Later!');
        }

        Cart::instance('saveForLater')->add($item->ISBN, $item->Title, 1, $item->Price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been Saved For Later!');
    }
}
