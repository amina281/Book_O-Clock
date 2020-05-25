<nav class="navbar navbar-expand-lg navbar-light bg-light"
     style="line-height: -1vh">

    <a class="navbar-brand" href="{{ route('landing-page') }}">Book O'Clock</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('landing-page') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services.index') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shop.index') }}">Genres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Authors</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">Log Out</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user">User
                        </i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="/cart" >Shopping cart</a>
                        <a class="dropdown-item" href="{{ route('bookshelf.index') }}">Bookshelf</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
                    @if( count((array) session('cart')) > 0)
                        <span class="badge">{{ count((array) session('cart')) }}</span>
                    @else
                        <span style="display: none"></span>
                    @endif
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link"  href="{{ url('/register') }}" >
                        <input type="button" value="Sign Up" class="button-hom sub" style="border-radius: 50px; padding: 0 .5em; border: none;" >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ url('/login') }}" >
                        <input type="button" value="Log In" class="button-hom log" style="border-radius: 50px; padding: 0 .5em; border: none;" >
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</nav>