<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Books OClock</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous">

    </script>
</head>

<style>
    .alert-message {
        color: red;
    }
    .img{
        background-image: url('https://eatingfiction.files.wordpress.com/2019/08/shutterstock_1068141515.jpg');
        height: 100%;
        background-size: cover;
    }
</style>

<body class="img">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Book O'Clock</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">

                        @if (Auth::check())
                        <li class="nav-item active">

                       <p class="nav-link"><b>WELCOME  {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</b></p>
                        </li>
                            <li class="nav-item active">
                                <a  class="nav-link" href="{{ url('/logout') }}">Logout</a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a  class="nav-link" href="{{ url('/login') }}">Login</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/register') }}">Register</a>
                            </li>
                        @endif
                </ul>
            </form>
        </div>
    </nav>
    <div class="container">
                @yield('content')
    </div>
</body>
</html>