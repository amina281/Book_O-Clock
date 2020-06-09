@extends('layouts.master')
@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/shopping-cart.css') }}">
@endsection
@section('content')

    <div class="shopping-page">
        <div class="shopping-pg-wrapper">

                <section class="shop-header">
                    <h1>Search Results:</h1><br> <h1>{{ $products->count() }} result(s) for '{{ request()->input('query') }}'</h1>
                </section>

                <div class="container">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger" >
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="list-style: none;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="product-wrapper">

                    @foreach($products as $product)
                        <section class="row-product">

                            <div class="product-img-div">
                                <img src="{{ $product->imagePath }}.jpg" alt="img" class="product-img">
                            </div>

                            <div class="info-prod-row">
                                <div class="name-price">
                                    <div class="name-price-wrapp">
                                        <h2 class="book-name"><a href="{{ route( 'product.show', $product->slug ) }}">{{ $product->Title }}</a></h2>
                                        <h2 class="book-price">$<span class="price-tg">{{ $product->Price }}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </section><!-- end cart-table-row -->
                    @endforeach
                </div>
        </div>
    </div>

@endsection
@section('extra-js')

@endsection