@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

        .grid-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: white;
            margin-top: 50px;
        }
        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 5px 0;
            font-size: 30px;
        }
        .button {
            background-color: salmon;
            border: none;
            color:white;
            text-align: center;
            font-size: 15px;
            padding: 10px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;

        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 20px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        .dropdown{
            margin-top: 20px;


        }
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-image:none !important;
        }
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color:salmon;
        }
        p{
            font-family: cursive;
            text-align: center;
            font-size: 60px;
            margin-top: 30px;
            margin-bottom: 0px;
        }
        .bg-4 {
            background-color: #2f2f2f;
            color: #ffffff;
            font-size: 15px;
        }
    </style>
@endsection

@section('content')

    @foreach($products as $product)
        <div class="grid-container">
            <div class="imgContainer">
                <div><img src="{{ $product->imagePath}}.jpg" alt="TheAlchemist" style="width:300px"></div>
                <div class="imgButton">
                    <a href="/product/{{ $product->slug }}"><button class="button"><span>Read more </span></button></a>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('extra-js')
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection
