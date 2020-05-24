@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/product.css') }}">
@endsection

@section('content')

    <section class="book-page">
        <div class="bookpage-img1"></div>

        <section class="upper-page">
            <section class="upper-cover-wrapper">
                <div class="upper-cover">
                    <a href="#"><h4>Young Adult</h4></a>
                    <img src="" alt="cover">
                </div>
            </section>

            <section class="cover-right">
                <section class="right-wrapper">
                    <div class="cover-title">
                        <h1 class="cov-nam">{{ $product->Title }}</h1>
                        <a href="#"><h3 class="auth-nam"></h3></a>
                    </div>
                    <p class="book-parag">
                        {{ $product->Description}}
                    </p>

                </section>
            </section>

            @if (Auth::check())
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
                                        <h1 class="bookshelf-select"> Add To Bookshelf </h1>
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
                                            <label></label>
                                            <input type="text" id="add-bookshelf" name="add-bookshelf" placeholder="Name of bookshelf">
                                            <button>Save</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul >
                        @foreach($errors->all() as $error)
                            <li style="list-style: none;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

        </section>


        <section class="more-cover-info">
            <div class="tittle-info">
                <h2>More information</h2>
            </div>
            <section class="moreinfo-wrapper">
                <div class="cover-specific">
                    <h5>Hardcover, {{$product ->PageNum}} pages</h5>
                    <h5>Published: {{ $product->Published}}</h5>
                </div>
                <div class="cover-speci2">
                    <h5><span>Original Title:</span> {{ $product->Title }}</h5>
                    <h5><span>Edition Language:</span> {{ $product->Language}}</h5>
                    <div class="awords">
                        <h5>Literary Awards:</h5>
                        <ul class="awords-list">
                            <li>{{ $product->literaryAwards }}</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        @if (Auth::check())
            <section class="buy-read">
                <section class="before-read-wrapper">
                    <span></span>
                    <span></span>


                    <section class="buy-cover-wrapp">

                        <div class="buy-cover">
                            <h2 class="copy-head">Get A Copy</h2>
                            <div class="price-cover">
                                <h3>Price : </h3>
                                <h2>${{ $product -> Price }}</h2>
                            </div>
                            <div class="add-tocart">
                                <a href="{{ url('add-to-cart/'.$product->ISBN) }}" >
                                    <button type="submit">Add to Cart</button>
                                </a>
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
        @endif

        <section class="critic-review">
            <section class="critic-wrapper">
                <h1>Critic Reviews</h1>
                <div class="critic-op">
                    <div class="critic-head">
                        <img src="{{ $product-> criticImagePath}}.jpg" alt="">
                        <h3>-{{ $product-> criticName }}</h3>
                    </div>
                    <div class="critic-com">
                        <p>{{ $product-> criticRev }}</p>
                    </div>
                </div>
            </section>
        </section>


        <section class="comment-cover">
            <section class="comment-cover-wrapper">

                <h2 class="comment-cover-h2">Comments</h2>

                <section class="other-com-wrapper">
                    <div class="others-com">
                        <div class="user-comimg div-img-com">
                            <img class="com-img" src="#" alt="">
                            <a href="#"><h1 class="user-nam-com">Lola</h1></a>
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
                </section>

                @if (Auth::check())
                    <div class="your-com">
                        <form action="{{ route('comments.store', $product->slug) }}" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="name" id="name" />
                            <input type="hidden" name="email" id="email" />

                            <textarea  id="comment" name="comment" cols="40" rows="6" placeholder="Leave your comment here"></textarea>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                @endif
            </section>
        </section>

        @include('partials.might-like')

    </section>
@endsection

@section('script')

@endsection