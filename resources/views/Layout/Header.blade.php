<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Book O'Clock</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                @if (Route::has('custom.login'))
                        @if (Auth::check())
                            <a href="{{ url('/dashboard') }}">Home</a>
                        @else
                        <li class="nav-item active">
                            <a  class="nav-link" href="{{ url('/custom-login') }}">Login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/custom-register') }}">Register</a>
                        </li>
                        @endif

                @endif
            </ul>
        </form>
    </div>
</nav>