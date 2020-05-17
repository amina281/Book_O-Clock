@extends('layouts.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/landing-page.css') }}">
@endsection

@section('content')

    <section class="homepage-before">
        <section class="upper-portion">
            <div class="back-photo"></div>
            <div class="hero-section">
                <h1> Book O'Clock</h1>
                <p>“You have to write the book that wants to be written.
                    And if the book will be too difficult for grown-ups,
                    then you write it for children.”<br><b>― Madeleine L'Engle</b>
                </p>
            </div>
            <div class="bottom-section">
                <div class="img-bottom"></div>
                <button>Sign Up</button>
                <div class="boxes box1"></div>
                <div class="boxes box2"></div>
            </div>

        </section>
        <section class="bottom-portion">
            <a href="#">
                <div class="containerhm books-btn">
                    <h3>Books</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm authors-btn">
                    <h3>Authors</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm news-btn">
                    <h3>News</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm quotes-btn">
                    <h3>Quotes</h3>
                </div>
            </a>
        </section>
    </section>

@if (Auth::check())
    <section  class="quotes-hm-page">

        <div class="quotes-header">
            <div class="border-head">
                <span class="line-rad rad1"></span>
                <span class="line-rad rad2"></span>
                <span class="line-rad rad3"></span>
                <span class="line-rad rad4"></span>
            </div>
            <a href="#"><button>Quotes</button></a>
        </div>

        <div class="body-qutes-corousel">
            <button class="carousel-button carousel-btn-left">
                <i class="fa fa-chevron-circle-left"></i>
            </button>

            <div class="corousel-track-container">
                <div class="corousel-track">
                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>
                </div>
            </div>

            <button class="carousel-button carousel-btn-right">
                <i class="fa fa-chevron-circle-right"></i>
            </button>
            <div class="corousel__nav">
                <button class="corousel-indicator current-slide"></button>
                <button class="corousel-indicator"></button>
                <button class="corousel-indicator"></button>
                <button class="corousel-indicator"></button>
            </div>

        </div>
    </section>


    <section  class="new-hm-page">

        <div class="new-header">
            <a href="#"><button>New <span>Releases</span></button></a>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="books-section">
        <div class="bookheader-section">
            <h3>Recomendation</h3>
            <div class="img-book">
                <img src="./book-covers/AmericanStreet-by-Ibi-Zoboi-533x800.jpg" alt="">
            </div>
        </div>
        <section class="book-section-inf">

            <div class="book-inf-hm">
                <h1>American Street</h1>
                <h4><a href="#"> by Ibi Zoboi</a></h4>
                <p>The rock in the water does not know the pain of the rock in the sun.
                    On the corner of American Street and Joy Road, Fabiola Toussaint thought she would finally find une belle viea good life.
                </p>
                <p>But after they leave Port-au-Prince, Haiti, Fabiolas mother is detained by U.S.
                    immigration, leaving Fabiola to navigate her loud American cousins, Chantal, Donna, and Princess; the
                </p>
                <div class="book-more">
                    <h3>Want to know more?</h3>
                    <a href="#"><button>Read more <i class="fa fa-caret-square-right"></i></button> </a>
                </div>
            </div>
        </section>

        <section class="book-list">
            <div class="book-img">
                <img src="./book-covers/a-thousand-nights1.jpg" alt="">
                <img src="./book-covers/ten-thousand-skies-above-you1.jpg" alt="">
                <img src="./book-covers/th (1).jpg" alt="">
                <img src="./book-covers/th.jpg" alt="">
                <img src="./book-covers/th (2).jpg" alt="">
            </div>


            <div class="blur-book">
                <h2>To learn more about our books</h2>
                <div class="seemore-books">
                    <h2>Click here for more</h2>
                    <h5><a href="#">Books</a></h5>
                </div>
            </div>
        </section>
        <div class="bookfooter-section"></div>
    </section>

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
                    <a href="#"><i class="fa fa-book-reader"></i></a>
                </div>
                <h3>Books & Authors</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>

            <div class="bubbless info2">
                <div class="animation">
                    <section class="quotes-bf">
                        <i class="fa fa-quote-left">___</i>
                        <i class="fa fa-quote-right"></i>
                    </section>
                </div>
                <h3>Quotes</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>

            <div class="bubbless info3">
                <div class="animation1">
                    <a href="#"><i class="fa fa-newspaper"></i></a>
                </div>
                <h3>News</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>
        </section>

        <section class="back-info-wrapper">
            <section class="back-info">
                <div class="backinfo-div">
                    <h1>01</h1>
                    <h2>Services</h2>
                    <h3>my service</h3>
                </div>
                <div class="backinfo-div">
                    <h1>02</h1>
                    <h2>Steps</h2>
                    <h3>my help</h3>
                </div>
                <div class="backinfo-div">
                    <h1>03</h1>
                    <h2>Contact</h2>
                    <h3>my mail</h3>
                </div>
            </section>
            <button>See More</button>
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
                <button class="sub">Sign Up</button>
                <button class="log">Log In</button>
            </div>
        </div>
    </section>
@endif

@endsection