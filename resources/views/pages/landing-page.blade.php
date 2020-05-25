@extends('layouts.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/landing-page.css') }}">
@endsection

@section('content')

    <section class="homepage-before">
        <section class="upper-portion">
            <div class="back-photo"></div>
            <div class="hero-section">
                <h1 class="her-title"> Book O'Clock</h1>
                <p class="her-secion-p">“You have to write the book that wants to be written.
                    And if the book will be too difficult for grown-ups,
                    then you write it for children.”<br><b>― Madeleine L'Engle</b>
                </p>
            </div>
            <div class="bottom-section">
                <div class="img-bottom"></div>
                @if (!Auth::check())
                    <a href="{{ route('login') }}"> <button>Sign Up</button></a>
                @endif
                <div class="boxes box1"></div>
                <div class="boxes box2"></div>
            </div>

        </section>
        <section class="bottom-portion">
            <a href="{{ route('shop.index') }}">
                <div class="containerhm books-btn">
                    <h3 class="buttons-names">Books</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm authors-btn">
                    <h3 class="buttons-names">Authors</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm news-btn">
                    <h3 class="buttons-names">News</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm quotes-btn">
                    <h3 class="buttons-names">Quotes</h3>
                </div>
            </a>
        </section>
    </section>


    @if (Auth::check())


    @else
        <section class="info">
            <div class="offer">
                <h2>What we offer</h2>
            </div>
        </section>

        <section class="bubbles-info-wrapper">

            <section class="info-bubbless">
                <div class="bubbless info1">
                    <div class="animation1">
                        <a href="#"><i class="fa fa-bookmark"></i></a>
                    </div>
                    <h3 class="offer-section">Books & Authors</h3>
                    <p class="offer-section-p">
                        A wide range of books and authors, free
                        reading or downloading or even buying.
                    </p>
                </div>

                <div class="bubbless info2">
                    <div class="animation">
                        <section class="quotes-bf">
                            <i class="fa fa-quote-left">___</i>
                            <i class="fa fa-quote-right"></i>
                        </section>
                    </div>
                    <h3 class="offer-section">Quotes</h3>
                    <p class="offer-section-p">
                        Diiferent quotes, life, love ,inspirational,
                        success, truth , humor and much more.
                    </p>
                </div>

                <div class="bubbless info3">
                    <div class="animation1">
                        <a href="#"><i class="fa fa-newspaper"></i></a>
                    </div>
                    <h3 class="offer-section">News</h3>
                    <p class="offer-section-p">
                        What's new ? What is going to be released these week, what about
                        next month?
                    </p>
                </div>
            </section>

            <section class="back-info-wrapper">
                <section class="back-info">
                    <div class="backinfo-div">
                        <h1 class="back-1">01</h1>
                        <h2 class="back-2">Services</h2>
                        <h3 class="back-3">my service</h3>
                    </div>
                    <div class="backinfo-div">
                        <h1 class="back-1">02</h1>
                        <h2 class="back-2">Steps</h2>
                        <h3 class="back-3">my help</h3>
                    </div>
                    <div class="backinfo-div">
                        <h1 class="back-1">03</h1>
                        <h2 class="back-2">Contact</h2>
                        <h3 class="back-3">my mail</h3>
                    </div>
                </section>
                <a href="{{ route('services.index') }}" ><button>See More</button></a>
            </section>
        </section>


        <section class="register">
            <section class="img-register">
                <div class="img-scew img1"></div>
                <div class="img-scew img2"></div>
                <div class="img-scew img3"></div>
                <div class="img-scew img4"></div>
            </section>
            <div class="subscribe-wrapper">
                <h2>Subscribe</h2>
                <p>“You have to write the book that wants to be written.
                    And if the book will be t..
                </p>
                <div class="buttons-sub">
                    <a href="{{ url('register') }}"><button class="sub">Sign Up</button></a>
                    <a href="{{ route('login') }}"><button class="log">Log In</button></a>
                </div>
            </div>
        </section>
    @endif

@endsection