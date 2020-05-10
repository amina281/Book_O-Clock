<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Book O\' Clock) }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="icon" href="/img/dictionary_book_19723.png"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,400;1,700&family=Anton&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/layout/header.css') }}"  >

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
                <li class="list-items"><a href="#">Services</a></li>
                <li class="list-drop ">
                    <a href="#">Book  <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Generes</a></li>
                        <li><a href="#">Authors</a></li>
                    </ul>
                </li>

                @if (Auth::check())
                    <li class="list-drop ">
                        <a href="#">Others  <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="#">New</a></li>
                            <li><a href="#">Quotes</a></li>
                        </ul>
                    </li>
                @endif

                <li>
                    <div class="search-area">
                        <input type="search" placeholder="Search..." class="search-txt">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </li>

                @if (Auth::check())
                    <li class="user">
                        <a href="#"><i class="fa fa-user"></i></a>
                        <ul class="user-dropdown">
                            <li><a href="#">Profile</a></li>
                            <li><a href="{{ route('cart.index') }}" >Shopping cart</a></li>
                            <li><a href="{{ url('/logout') }}">Log Out</a></li>
                        </ul>
                    </li>
                    <li class="shopping">
                        <a href=href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
                        @if(Cart::instance('deafault')->count() > 0)
                            <span>{{Cart::instance('deafault')->count() }}</span>
                        @endif
                    </li>

                @else
                    <li ><a href="{{ url('/register') }}"><input type="button" value="Sign Up" class="button-hom sub"></a></li>
                    <li ><a href="{{ url('/login') }}"><input type="button" value="Log In" class="button-hom log"></a></li>
                @endif
            </ul>
        </nav>
    </header>


@yield('content')


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@yield('script')

</body>
</html>