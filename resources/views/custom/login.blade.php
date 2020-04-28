@extends('layout')
@section('title', 'Login Form')
@section('content')
    <style>
        .form-horizontal{
            border: 1px solid #6b9dbb;
            background-color: #c9e2b3;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 50%;
        }


    </style>
    <div class="container">
        <div class="col-lg-6 offset-lg-3">
            <h2 align="center">Login Here</h2><hr>
            <form class="form-horizontal" method="POST" action="{{route('custom.login')}}">
                {{ csrf_field() }}
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" value="{{ old('Email') }}" required autofocus name="Email" placeholder="Email Address">
                <br>
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
                <br><br>
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
                @if (session('Status'))

                    <p class="alert-danger">{{session(('Status'))}}</p>

                @endif
            </form>


        </div>
    </div>
@endsection