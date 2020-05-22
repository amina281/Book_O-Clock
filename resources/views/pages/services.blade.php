@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/services.css') }}">
@endsection

@section('content')
    <section class="section-a">
        <div class="backservices">
            <h1 class="backservicesh1">Services</h1>
            <h3 class="backservicesh3">What we do</h3>
        </div>
    </section>

    <section class="section-b">
        <section class="sectionb-wrapper">
            <div class="wrapper-info wrapper-1">
                <i class="fa fa-bookmark"></i>
                <h3 class="wrapper-info-h3">01.</h3>
                <h2 class="wrapper-info-h2">Read</h2>
                <p class="wrapper-info-p">
                    Text messages are used for personal, family, business
                    and social purposes.Governmental and ganizations use text essaging
                </p>
            </div>
            <div class="wrapper-info wrapper-2">
                <i class="fa fa-bookmark"></i>
                <h3 class="wrapper-info-h3">02.</h3>
                <h2 class="wrapper-info-h2">Buy</h2>
                <p class="wrapper-info-p">
                    Text messages are used for personal, family, business
                    and social purposes.Governmental and ganizations use text essaging
                </p>
            </div>
            <div class="wrapper-info wrapper-3">
                <i class="fa fa-bookmark"></i>
                <h3 class="wrapper-info-h3">03.</h3>
                <h2 class="wrapper-info-h2">Save for later</h2>
                <p class="wrapper-info-p">
                    Text messages are used for personal, family, business
                    and social purposes.Governmental and ganizations use text essaging
                </p>
            </div>
        </section>
    </section>

    <section class="section-c">
        <div class="back-worksinfo"></div>
        <div class="works-info">
            <h3 class="works-info-h3">The Process</h3>
            <h2 class="works-info-h2">How it all works</h2>
        </div>
        <section class="section-c2">
            <section class="c2">
                <div class="bubble bubble1-info">
                    <i class="fa fa-bookmark"></i>
                    <h2 class="bubble-h2">Register</h2>
                    <p class="bubble-p">
                        Text messages are used for personal, family, business
                        and social purposes.Governmental and ganizations use text essaging
                    </p>
                </div>
                <div class="bubble bubble2-info">
                    <i class="fa fa-bookmark"></i>
                    <h2 class="bubble-h2">Register</h2>
                    <p class="bubble-p">
                        Text messages are used for personal, family, business
                        and social purposes.Governmental and ganizations use text essaging
                    </p>
                </div>
                <div class="bubble bubble3-info">
                    <i class="fa fa-bookmark"></i>
                    <h2 class="bubble-h2">Register</h2>
                    <p class="bubble-p">
                        Text messages are used for personal, family, business
                        and social purposes.Governmental and ganizations use text essaging
                    </p>
                </div>
            </section>
        </section>
    </section>

    <section class="section-d">
        <div class="back-contact"></div>
        <div class="contact-header">
            <h2 class="contact-header-h2">Contact us</h2>
            <p class="contact-header-p">Text messages are used for personal, family, business and social purposes. </p>
        </div>
        <div class="contact-form">
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

            <form action="{{ route('services.send')}}" method="POST">
                {{ csrf_field() }}

                <input class="cont-input" id="name" name="name" type="text" placeholder="Name*" />
                <input class="cont-input" type="email" id="email" name="email" placeholder="Email*"/>
                <input class="cont-input" type="text" id="subject" name="subject" placeholder="Subject*"/>
                <textarea class="cont-input text-contact" id="message" name="message" placeholder="Type a message" rows="7" ></textarea>

                <button type="submit" class="submit-contact">Submit</button>
            </form>
        </div>
        <div class="svg-img"></div>
    </section>
@endsection

@section('extra-js')

@endsection