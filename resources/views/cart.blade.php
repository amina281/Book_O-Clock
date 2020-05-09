@extends('layouts.master')

@section('title', 'Shopping Cart')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/shopping-cart.css') }}">
@endsection

@section('content')
        <div class="shopping-page">
            <div class="shopping-pg-wrapper">

                <section class="shop-header">
                    @if (Cart::count() > 0)
                        <h1>Your Order: {{ Cart::count() }} item(s)</h1>
                </section>

                <div class="product-wrapper">

                    <ul class="title-shop">
                        <li>Title</li>
                        <li>Price</li>
                        <li>QTY</li>
                        <li>Total Price</li>
                    </ul>

                    @foreach (Cart::content() as $item)
                        <section class="row-product">
                            <div class="product-img-div">
                                <img src="./img/cover-book.jpg" alt="" class="product-img">
                            </div>

                            <div class="info-prod-row">
                                <div class="name-price">
                                    <h2 class="book-name"><a href="{{}}">American Street</a></h2>
                                    <h2 class="book-price">$<span class="price-tg">9.99</span></h2>
                                </div>
                                <div class="quantity">
                                    <div class="quantity-buttons">
                                        <a href="#"><i class="fa fa-minus"></i></a>
                                        <h3 class="prod-quantity">1</h3>
                                        <a href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="total-dtelete">
                                    <div class="tot-del">
                                        <h2 class="total-book-price">$<span class="total-price-tg">9.99</span></h2>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section><!-- end cart-table-row -->
                    @endforeach

                </div>

                <div class="tot-footer">
                    <div class="upper-footer-tgs">

                        <section class="tot-prod-nr tot">
                            <h4>Total Product:</h4>
                            <h4 class="nr-tot nr-black">3</h4>
                        </section>
                        <section class="tot-cart-price tot">
                            <h4>Total Cost:</h4>
                            <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">29.7</span></h4>
                        </section>

                    </div>

                    <div class="button-check">
                        <a href="#"><button class="checkout-from-cart">Checkout</button></a>
                    </div>
                </div>

                @else

                    <h3>No items in Cart!</h3>
                    <div class="spacer"></div>
                    <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                    <div class="spacer"></div>

                @endif
            </div>
        </div>
@endsection
