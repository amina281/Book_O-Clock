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
        if($slug != '') {
            $product = Book::where('slug','=' ,$slug)->first();
        }else{
            $product = Book::where('ISBN', '=',1)->first();
        }
        $mightAlsoLike = Book::where('slug', '!=', $slug)->inRandomOrder()->take(6)->get();

        $comment = DB::table('comments')->where('post_id', $product->ISBN);

        return view('pages.product')
            ->with([
                'product' => $product,
                'mightAlsoLike' => $mightAlsoLike,
                'comment' => $comment,
            ]);
    }

/*    public function cart()
    {
        return view('pages.cart');
    }


    public function addToCart(Request $request, $ISBN)
    {
        $product = DB::table('Books')->where('ISBN', $ISBN)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->ISBN);
        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('product.show',['slug'=>$product->slug])->with('success', 'Book was added to your cart!' );

    }
*/
   /* public function addToCart($ISBN)
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

            $cart [$request->ISBN]["qty"] = $request->qty;

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
        if(!$cart) {

        return view('pages.cart');
        }

        if($request->ISBN and $request->qty)
        {
            $cart = session()->get('cart');

            $cart [$request->ISBN]["qty"] = $request->qty;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }




        return view('pages.checkout');
    }
   */

}
