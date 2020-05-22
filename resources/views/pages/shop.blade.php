@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ URL('css/pages/shop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/product.css') }}">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <div class="row" style="margin-top: 13vh;">

                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="/product/{{ $product->slug }}"><img class="card-img-top" src="{{ $product->imagePath}}.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="/product/{{ $product->slug }}">{{ $product->Title }}</a>
                                    </h4>
                                    <h5>${{ $product->Price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection

@section('extra-js')
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection
