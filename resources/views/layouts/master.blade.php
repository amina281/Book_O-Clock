<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Book O\'Clock') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Dancing+Script:wght@400;600&family=Kaushan+Script&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL('css/layout/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/follow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/product.css') }}">


    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow-x: hidden;
        }
        /*============== alert =====================*/
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
    @yield('extra-css')

</head>
<body>
    <header>
        <section class="left-header">
            <div class="burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>

            <div class="logo">
                <h3>Book O'Clock</h3>
            </div>
        </section>

        <nav>
            <ul class="nav-bar">
                <li class="list-items"><a href="{{ route('landing-page') }}">Home</a></li>
                <li class="list-items"><a href="{{ route('services.index') }}">Services</a></li>
                <li class="list-items"><a href="{{ route('shop.index') }}">Generes</a></li>
                <li class="list-items"><a href="#">Authors</a></li>

                <li>
                    <div class="search-area">
                        <input type="search" placeholder="Search..." class="search-txt">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </li>


                <li class="user">
                    <a href="#"><i class="fa fa-user"></i></a>
                    <ul class="user-dropdown">
                        <li><a href="#">Profile</a></li>
                        <li><a  href="/cart" >Shopping cart</a></li>
                        <li><a href="#">Bookshelf</a></li>
                        <li><a href="{{ url('/logout') }}">Log Out</a></li>
                    </ul>
                </li>
                <li class="shopping">
                    <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
                    @if(Session::has('cart'))
                        <span>{{ Session::get('cart')->totalQty}}</span>
                    @else
                        <span style="display: none;"></span>
                    @endif
                </li>



                <li ><a href="{{ url('/register') }}"><input type="button" value="Sign Up" class="button-hom sub"></a></li>
                <li ><a href="{{ url('/login') }}"><input type="button" value="Log In" class="button-hom log"></a></li>


            </ul>
        </nav>
    </header>
    @include('partials.follow')
    @yield('content')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@yield('extra-js')

</body>
</html>