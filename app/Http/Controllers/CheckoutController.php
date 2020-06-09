<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;
use Session;
use App\Order;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session('cart')){
            return  redirect()->route('cart.index')->with('error', 'You can\'t enter the checkout page without having product on your shopping cart !' );
        }
        return  view('pages.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = session()->get('cart');

        if (!session('cart')){
            return  redirect()->route('cart.index')->with('error', 'You can\'t enter the checkout page without having product on your shopping cart !' );
        }
        Stripe::setApiKey('sk_test_WAQgR3UoziWNozJZclliAMSi00Hx7F5Fe0');
        try{
            Charge::create(array(
                "amount" => $cart-> total,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge"
            ));
        }
        catch (\Exception $e){
            return redirect()->route('checkout.index')->with('error' , $e->get/message());
        }

        Session::forget('cart');
        return redirect()->route('confirmation.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

}
