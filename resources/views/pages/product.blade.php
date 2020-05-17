@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/product.css') }}">
@endsection

@section('content')

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <section class="book-page">
        <div class="bookpage-img1"></div>

        <section class="upper-page">
            <section class="upper-cover-wrapper">
                <div class="upper-cover">
                    <a href="#"><h4>Young Adult</h4></a>
                    <img src="{{ productImage($product->image) }}" alt="cover">
                </div>
            </section>

            <section class="cover-right">
                <section class="right-wrapper">
                    <div class="cover-title">
                        <h1>{{ $product->Title }}</h1>
                        <a href="#"><h3></h3></a>
                    </div>
                    <p>
                        {{ $product->Description}}
                    </p>

                </section>
            </section>

            <div class="cover-left-wrapper">
                <section class="cover-left">
                    <div class="book-rate">
                        <h4>Rating :</h4>
                        <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="select-op">
                        <ul class="cover-add" id="select-bookshelf">
                            <li class="hed-select" onclick="show_hide()">
                                <div class="hed">
                                    <h1> Add To Bookshelf </h1>
                                    <i class="fa fa-sort-down"></i>
                                </div>

                                <ul class="toselect-bookshelf" id="expand-menu">
                                    <li><a href="#">Read</a> </li>
                                    <li><a href="#">Reading</a></li>
                                    <li><a href="#">Want To Read</a></li>
                                    <li id="addbookshelf" onclick="show_form_bookshelf()">
                                        <a href="#">
                                            <i class="fa fa-plus"></i> Add Bookshelf
                                        </a>
                                    </li>
                                </ul>
                            <li class="side-form" id="to-add-bookshelf">
                                <div class="bookshelf-form" >
                                    <form action="#">
                                        <input type="text" placeholder="Name of bookshelf">
                                        <button>Save</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

        </section>


        <section class="more-cover-info">
            <div class="tittle-info">
                <h2>More information</h2>
            </div>
            <section class="moreinfo-wrapper">
                <div class="cover-specific">
                    <h5>Hardcover, {{$product->PageNum}} pages</h5>
                    <h5>Published: {{ $product->Published}}</h5>
                </div>
                <div class="cover-speci2">
                    <h5><span>Original Title:</span> {{ $product->Title }}</h5>
                    <h5><span>Edition Language:</span> {{ $product->Language}}</h5>
                    <div class="awords">
                        <h5>Literary Awards:</h5>
                        <ul class="awords-list">
                            <li>South Carolina Book Award Nominee for Young Adult (2020),</li>
                            <li> Lincoln Award Nominee (2019), </li>
                            <li>  Américas Award (2018), </li>
                            <li> National Book Award Finalist for Young People's Literature (2017)</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <section class="buy-read">
            <section class="before-read-wrapper">
                <span></span>
                <span></span>
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <section class="buy-cover-wrapp">
                    <div class="buy-cover">
                        <h2 class="copy-head">Get A Copy</h2>
                        <div class="price-cover">
                            <h3>Price : </h3>
                            <h2>{{ $product->Price}}</h2>
                        </div>
                        <div class="add-tocart">
                            <form action="{{ route('cart.store')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="ISBN" value="{{ $product->ISBN }}">
                                <input type="hidden" name="Title" value="{{ $product->Title }}">
                                <input type="hidden" name="Price" value="{{ $product->Price }}">
                                <button type="submit">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </section>

                <section class="read-cover-wrapp ">
                    <span></span>
                    <span></span>
                    <div class="read-cover">
                        <h2>Read For Free</h2>
                        <p>Download or read online</p>
                        <button type="button"><i class="fa fa-download"></i> Download</button>
                    </div>
                </section>

            </section>
        </section>

        <section class="critic-review">
            <section class="critic-wrapper">
                <h1>Critic Reviews</h1>
                <div class="critic-op">
                    <div class="critic-head">
                        <img src="./img/3238361-1549477380.jpeg" alt="">
                        <h3>-Lucinda Dyer</h3>
                    </div>
                    <div class="critic-com">
                        <p>This edgy and realistic novel takes an unflinching look at the new life a
                            Haitian-raised teen girl tries to create for herself in a gritty Detroit neighborhood.
                            Author Ibi Zoboi, who immigrated to the U.S. from Haiti when she was a child, is a gifted
                            storyteller who has created a vivid and memorable cast of characters.
                        </p>

                        <p>But her novel is best
                            suited for mature teens given the graphic storylines about family loyalties, drug dealing, and
                            an abusive relationship. Readers should consider whether the merits of the writing outweigh any
                            concerns about language and drug-related content.
                        </p>
                    </div>
                </div>
            </section>
        </section>

        <section class="comment-cover">
            <section class="comment-cover-wrapper">

                <h2>Comments</h2>

                <section class="other-com-wrapper">
                    <div class="others-com">
                        <div class="user-comimg div-img-com">
                            <img class="com-img" src="./img/1373880.jpg" alt="">
                            <a href="#"><h1>Lola</h1></a>
                        </div>
                        <div class="left-comment">
                            <p>As an immigrant myself, I connected with Fabiola tremendously.
                                When you move from one place to a very different place or even if youre just there to visit theres usually a culture shock happening.
                                I felt that. I know what its like for people to mock the way you speak or laugh at the unusual words you use.
                                When you move from one place to a very different place or even if youre just there to visit theres usually a culture shock happening.
                                I felt that. I know what its like for people to mock the way you speak or laugh at the unusual words you use.
                            </p>
                        </div>
                    </div>

                    <div class="others-com">
                        <div class="user-comimg">
                            <img class="com-img div-img-com" src="./img/1373880.jpg" alt="">
                            <a href="#"><h1>Lola</h1></a>
                        </div>
                        <div class="left-comment">
                            <p>As an immigrant myself, I connected with Fabiola tremendously.
                                When you move from one place to a very
                            </p>
                        </div>
                    </div>

                    <div class="others-com">
                        <div class="user-comimg div-img-com">
                            <img class="com-img div-img-com" src="./img/1373880.jpg" alt="">
                            <a href="#"><h1>Lola</h1></a>
                        </div>
                        <div class="left-comment">
                            <p>As an immigrant myself, I connected with Fabiola tremendously.
                                When you move from one place to a very different place or even if youre just there to visit theres usually a culture shock happening.
                                I felt that. I know what its like for people to mock the way you speak or laugh at the unusual words you use.
                            </p>
                        </div>
                    </div>
                </section>

                <div class="your-com">
                    <form action="#">
                        <textarea  id="comment" cols="40" rows="6" placeholder="Leave your comment here"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </section>
        </section>


        <section class="maylike">
            <div class="maylike-wrapper">
                <h2>You may also like</h2>

                <ul class="maylike-list">
                    <li>
                        @foreach ($mightAlsoLike as $product)
                            <a href="{{ route('shop.show', $product->slug) }}">
                                <img src="{{ productImage($product->image) }}" alt="product">
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </section>

    </section>
@endsection

@section('script')

@endsection