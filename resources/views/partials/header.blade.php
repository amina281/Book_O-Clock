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
            <li class="list-drop ">
                <a href="#">Book  <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown">
                    <li><a href="{{ route('shop.index') }}">Generes</a></li>
                    <li><a href="#">Authors</a></li>
                </ul>
            </li>


                <li class="list-drop ">
                    <a href="#">Others  <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">New</a></li>
                        <li><a href="#">Quotes</a></li>
                    </ul>
                </li>


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


                <li ><a href="{{ url('/register') }}"><input type="button" value="Sign Up" class="button-hom sub"></a></li>
                <li ><a href="{{ url('/login') }}"><input type="button" value="Log In" class="button-hom log"></a></li>

        </ul>
    </nav>
</header>


