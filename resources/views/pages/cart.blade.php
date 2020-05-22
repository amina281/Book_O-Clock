@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/shopping-cart.css') }}">
@endsection

@section('content')
    <div class="shopping-page">
        <div class="shopping-pg-wrapper">

            @if(Session::has('cart'))

                <section class="shop-header">
                    <h1>Your Order:</h1>
                </section>

                <div class="product-wrapper">
                    <ul class="title-shop">
                        <li>Title</li>
                        <li>Price</li>
                        <li>QTY</li>
                        <li>Total Price</li>
                    </ul>

                    <section class="row-product">
                        @foreach($products as $product)
                            <div class="product-img-div">
                                <img src="{{ $product['item']['imagePath'] }}.jpg" alt="img" class="product-img">
                            </div>

                            <div class="info-prod-row">
                                <div class="name-price">
                                    <div class="name-price-wrapp">
                                        <h2 class="book-name"><a href="#">{{ $product['item']['Tittle'] }}</a></h2>
                                        <h2 class="book-price">$<span class="price-tg">{{ $product['item']['Price'] }}</span></h2>
                                    </div>
                                </div>
                                <div class="quantity-wrapp">
                                    <div class="quantity" >{{ $product['qty'] }}</div>
                                </div>
                                <div class="total-dtelete">
                                    <div class="tot-del">
                                        <h2 class="total-book-price">$<span class="total-price-tg">{{ $product['price'] }}</span></h2>
                                        <a href="{{ route('checkout') }}">
                                            <button type="submit"><i class="fa fa-times"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section><!-- end cart-table-row -->
                </div>

                <div class="tot-footer">
                    <div class="upper-footer-tgs">
                        <section class="tot-prod-nr tot">
                            <div>
                                <h4>Total Product:</h4>
                                <h4 class="nr-tot nr-black">{{'totalQty'}}</h4>
                            </div>
                        </section>
                        <section class="tot-cart-price tot">
                            <div>
                                <h4>Total Cost:</h4>
                                <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">{{ 'totalPrice' }}</span></h4>
                            </div>
                        </section>
                    </div>

                    <div class="button-check">
                        <a href="{{ route('shop.index') }}"><button class="checkout-from-cart -generes">Books</button></a>
                        <a href="{{ route('checkout') }}"><button class="checkout-from-cart">Checkout</button></a>
                    </div>
                </div>
            @else
                <section class="shop-header">
                    <h1>No items in Cart!</h1>
                </section>
                <div class="button-check">
                    <a href="{{ route('shop.index') }}"><button class="checkout-from-cart -generes">Books</button></a>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                        .then(function (response) {
                            // console.log(response);
                            window.location.href = '{{ route('cart.index') }}'
                        })
                        .catch(function (error) {
                            // console.log(error);
                            window.location.href = '{{ route('cart.index') }}'
                        });
                })
            })
        })();
    </script>
@endsection
