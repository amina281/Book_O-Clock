@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/shopping-cart.css') }}">
@endsection

@section('content')
    <div class="shopping-page">
        <div class="shopping-pg-wrapper">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul >
                        @foreach($errors->all() as $error)
                            <li style="list-style: none;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if(session()->has('success_message'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert" style="margin-right: 2em;"><strong>X</strong></button>
                    <strong>{{ session()->get('success_message') }}</strong>
                </div>
            @endif


            <?php $total = 0 ?>
            @if(session('cart'))
                <section class="shop-header">
                    <h1>Your Order:</h1>
                </section>


                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul >
                            @foreach($errors->all() as $error)
                                <li style="list-style: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if(session()->has('success_message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert" style="margin-right: 2em;"><strong>X</strong></button>
                        <strong>{{ session()->get('success_message') }}</strong>
                    </div>
                @endif


                <div class="product-wrapper">

                    <ul class="title-shop">
                        <li>Title</li>
                        <li>Price</li>
                        <li>QTY</li>
                        <li>Total Price</li>
                    </ul>

                    @foreach(session('cart') as $slug => $details)

                        <?php $total += $details['price'] * $details['quantity'] ?>

                            <section class="row-product">

                                <div class="product-img-div">
                                    <img src="{{ $details['photo'] }}.jpg" alt="img" class="product-img">
                                </div>

                                <div class="info-prod-row">
                                    <div class="name-price">
                                        <div class="name-price-wrapp">
                                            <h2 class="book-name"><a href="#">{{ $details['name'] }}</a></h2>
                                            <h2 class="book-price">$<span class="price-tg">{{ $details['price'] }}</span></h2>
                                        </div>
                                    </div>
                                    <div class="quantity-wrapp">
                                        <div class="quantity" >
                                            <input type="number" value="{{ $details['quantity'] }}" class="form-control-qty qty" min="1" />
                                        </div>
                                    </div>
                                    <div class="total-dtelete">
                                        <div class="tot-del">
                                            <h2 class="total-book-price">$<span class="total-price-tg">{{ $details['price'] *  $details['quantity']}}</span></h2>
                                            <div class="heq-update">
                                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $slug }}"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $slug }}"><i class="fa fa-trash-o"></i></button>
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
                            <a href="{{ route('shop.index') }}" ><button class="checkout-from-cart -generes">Books</button></a>
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
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("section").find(".qty").val()},
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
                    url: '{{ url('remove-from-cart') }}',
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
