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
                    <div class="card-header">Reset Password</div>
                    @if (count($errors)> 0)
                        @foreach($errors ->all() as $error)
                            <p class="alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <div class="card-body">
                        @if (session('Status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('Status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="/forget-password">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="email" class="col-lg-4 control-label">E-Mail Address</label>
                                <div class="col-lg-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection