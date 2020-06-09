@extends('layouts.master')

@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/checkout.css') }}">

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Checkout</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ route('landing-page') }}">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section" style="margin-top: 5vh;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">

                <?php $total = 0 ?>
                @foreach((array) session('cart') as $slug => $details)
                    <?php  $total += $details['price'] * $details['quantity'] ?>
                @endforeach

                    <!-- Billing Details -->
                    <div class="billing-details">

                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>

                        <form action="{{ route('checkout.store')}}" method="POST" id="checkout-form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input class="input" type="text" id="name-checkout" name="first-name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" id="lastN-checkout" name="last-name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" id="email-checkout" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" id="address-checkout" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" id="telephone-checkout" name="tel" placeholder="Telephone">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" id="city-checkout" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" id="country-checkout" name="country" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" id="zip-checkout" name="zip-code" placeholder="ZIP Code">
                            </div>


                            <div class="form-group" style="margin-top: 10vh;">
                                <h5 style="margin-bottom: 5vh;">Credit Card Information</h5>
                                <div class="form-group">
                                    <input class="input" type="text" id="card-name" name="car-name" placeholder="Card Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" id="card-number" name="car-name" placeholder="Credit Card Number">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" id="expiration-month" name="expiration-month" placeholder="Ex.Month">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" id="expiration-year" name="expiration-year" placeholder="Ex.Year">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" id="card-cvc" name="cvc" placeholder="CVC">
                                </div>
                            </div>

                            <button type="submit" style="margin-left: 12vw" class="primary-btn order-submit col-md-5">Place order</button>
                        </form>

                        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}" style="margin-top: 4vh;">
                            {{ Session::get('error')  }}
                        </div>

                    </div>
                    <!-- /Billing Details -->
                </div>


                <!-- Order Details -->
                <div class="col-md-5 order-details" style="max-height: 60vh">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3><hr>
                    </div>
                    <div class="order-summary">

                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            @if(session('cart'))
                                @foreach(session('cart') as $slug => $details)
                                    <div class="order-col">
                                        <div>{{ $details['quantity'] }} <b>*</b> {{ $details['name'] }}</div>
                                        <div>${{ $details['price'] *  $details['quantity']}}</div>
                                    </div>
                                @endforeach
                            @endif
                        </div><br>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">${{ $total }}</strong></div>
                        </div>
                    </div>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


@endsection

@section('extra-js')
    <script type="text/javascript" src="http://js.stripe.com/v2/" ></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}" ></script>
@endsection