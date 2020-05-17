@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/shopping-cart.css') }}">
@endsection

@section('content')
        <div class="shopping-page">
            <div class="shopping-pg-wrapper">

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

                        @foreach(Cart::content() as $item)
                            <section class="row-product">
                                <div class="product-img-div">
                                    <img src="{{asset('images/products/'.$item->model->slug.'.jpg')}}" alt="" class="product-img">
                                </div>

                                <div class="info-prod-row">
                                    <div class="name-price">
                                        <div class="name-price-wrapp">
                                            <h2 class="book-name"><a href="{{route('shop.show',$item->model->slug)}}">{{ $item->model->Title}}</a></h2>
                                            <h2 class="book-price">$<span class="price-tg">{{$item->model->Price}}</span></h2>
                                        </div>
                                    </div>
                                    <div class="quantity-wrapp">
                                        <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                            @for ($i = 1; $i < 5 + 1 ; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="total-dtelete">
                                        <div class="tot-del">
                                            <h2 class="total-book-price">$<span class="total-price-tg">{{$item->subtotal}}</span></h2>
                                            <form action="{{ route('cart.destroy','$item->rowId') }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit"><i class="fa fa-times"></i></button>
                                            </form>
                                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" >Save for Later</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- end cart-table-row -->
                        @endforeach
                    </div>

                    <div class="tot-footer">
                        <div class="upper-footer-tgs">
                            <section class="tot-prod-nr tot">
                                <div>
                                    <h4>Total Product:</h4>
                                    <h4 class="nr-tot nr-black">{{ Cart::count() }}</h4>
                                </div>
                            </section>
                            <section class="tot-cart-price tot">
                                <div>
                                    <h4>Subtotal:</h4>
                                    <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">{{ Cart::subtotal() }}</span></h4>
                                </div>
                                <div>
                                    <h4>Taxes:</h4>
                                    <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">{{ Cart::tax() }}</span></h4>
                                </div>
                                <div>
                                    <h4>Total Cost:</h4>
                                    <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">{{ Cart::total() }}</span></h4>
                                </div>
                            </section>
                        </div>

                        <div class="button-check">
                            <a href="{{ route('product.index') }}"><button class="checkout-from-cart -generes">Books</button></a>
                            <a href="{{ route('checkout.index') }}"><button class="checkout-from-cart">Checkout</button></a>
                        </div>
                    </div>

                <div class="save-forlater-wrapper">
                    <div class="save-forlater">

                        <section class="shop-header savefor-later">
                            @if (Cart::instance('saveForLater')->count() > 0)
                            <h1>{{ Cart::instance('saveForLater')->count() }} Item(s) Saved For Later:</h1>
                        </section>

                        <div class="product-wrapper">

                            <ul class="title-shop">
                                <li>Title</li>
                                <li>Price</li>
                                <li>QTY</li>
                                <li>Total Price</li>
                            </ul>

                            @foreach(Cart::instance('saveForLater')->content() as $item)
                                <section class="row-product">
                                    <div class="product-img-div">
                                        <img src="{{asset('images/products/'.$item->model->slug.'.jpg')}}" alt="" class="product-img">
                                    </div>

                                    <div class="info-prod-row">
                                        <div class="name-price">
                                            <h2 class="book-name"><a href="{{route('shop.show',$item->model->slug)}}">{{ $item->model->Title}}</a></h2>
                                            <h2 class="book-price">$<span class="price-tg">{{$item->model->Price}}</span></h2>
                                        </div>
                                        <div class="total-dtelete">
                                            <div class="tot-del">
                                                <h2 class="total-book-price">$<span class="total-price-tg">{{$item->model->Price}}</span></h2>
                                                <div class="move-remove">
                                                    <form action="{{ route('saveForLater.destroy','$item->rowId') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"><i class="fa fa-times"></i></button>
                                                    </form>
                                                    <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <button type="submit" >Move to Cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section><!-- end cart-table-row -->
                            @endforeach
                        </div>

                        <!-- end saved-for-later -->

                        @else
                            <h1>You have no items Saved for Later.</h1>
                        @endif

                    </div>
                </div>

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
