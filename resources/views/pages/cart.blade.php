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

                <?php $total = 0 ?>

                @if(session('cart'))
                    @foreach(session('cart') as $ISBN => $product)

                        <?php $total += $product['Price'] * $product['qty'] ?>

                        <section class="row-product">

                            <div class="product-img-div">
                                <img src="{{ $product['imagePath'] }}.jpg" alt="img" class="product-img">
                            </div>

                            <div class="info-prod-row">
                                <div class="name-price">
                                    <div class="name-price-wrapp">
                                        <h2 class="book-name"><a href="#">{{ $product['Title'] }}</a></h2>
                                        <h2 class="book-price">$<span class="price-tg">{{ $product['Price'] }}</span></h2>
                                    </div>
                                </div>
                                <div class="quantity-wrapp">
                                    <div class="quantity" >
                                        <input type="number" value="{{ $product['qty'] }}" class="form-control-qty qty" min="1" />
                                    </div>
                                </div>
                                <div class="total-dtelete">
                                    <div class="tot-del">
                                        <h2 class="total-book-price">$<span class="total-price-tg">{{ $product['Price'] *  $product['qty']}}</span></h2>
                                        <div class="heq-update">
                                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $ISBN }}"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $ISBN }}"><i class="fa fa-trash-o"></i></button>
                                        </div>
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
                                <h4 class="nr-tot nr-black">{{ count((array) session('cart'))}}</h4>
                            </div>
                        </section>
                        <section class="tot-cart-price tot">
                            <div>
                                <h4>Total Cost:</h4>
                                <h4 class="tot-price-nr nr-black">$<span class="price-of-prd">{{ $total }}</span></h4>
                            </div>
                        </section>
                    </div>

                    <div class="button-check">
                        <a href="{{ route('shop.index') }}"><button class="checkout-from-cart -generes">Books</button></a>
                        <a href="{{ route('checkout.index') }}"><button class="checkout-from-cart">Checkout</button></a>
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
    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">

            $(".update-cart").click(function (e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    route: '{{ route('cart.update') }}',
                    method: "patch",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), qty: ele.parents("div").find(".qty").val()},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    route: '{{ route('cart.remove') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
