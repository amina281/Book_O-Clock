<?php

namespace App\Http\Controllers;

use App\Comment;
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
        $product = Book::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Book::where('slug', '!=', $slug)->inRandomOrder()->take(6)->get();
        $comment = DB::table('comments')->where('post_id', $slug)->first();

        return view('pages.product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            'comment' => $comment,
        ]);
    }

    public function cart()
    {
        return view('pages.cart');
    }


    public function addToCart($ISBN)
    {
        $product = DB::table('Books')->where('ISBN', $ISBN)->first();
        if(!$product) {

            abort(404);

        }
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $ISBN => [
                    "Title" => $product->Title,
                    "qty" => 1,
                    "Price" => $product->Price,
                    "imagePath" => $product->imagePath
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$ISBN])) {

            $cart[$ISBN]['qty']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$ISBN] = [
            "Title" => $product->Title,
            "qty" => 1,
            "Price" => $product->Price,
            "imagePath" => $product->imagePath
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->ISBN and $request->qty)
        {
            $cart = session()->get('cart');

            $cart[$request->ISBN]["qty"] = $request->qty;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->ISBN) {

            $cart = session()->get('cart');

            if(isset($cart[$request->ISBN])) {

                unset($cart[$request->ISBN]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }


    public function getCheckout(Request $request)
    {
        $cart = session()->get('cart');

        if(!$cart) {
            return view('pages.cart');
        }

        return view('pages.checkout');
    }

}
