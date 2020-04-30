@extends('layouts.dashboard')
@section('content')
    <style>
        .card{

            margin-left: auto%;
            margin-right:auto%;
            width: auto%;
            margin-top:20%;

        }
    </style>
    <div class="container">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{url('/login')}}">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="email" class="col-lg-4 control-label">E-Mail Address</label>
                                <div class="col-lg-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-lg-4 control-label">Password</label>
                                <div class="col-lg-8">
                                    <input id="password" type="password" class="form-control" name="password" autocomplete="current-password">



                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary  btn-block">
                                        Login
                                    </button>
                                    <a class="btn btn-link" href="forget-password">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection