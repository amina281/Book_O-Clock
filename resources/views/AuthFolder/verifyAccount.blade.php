@extends('layouts.dashboard')
@section('content')
    <style>
        .card{

            margin-left: auto;
            margin-right:auto;
            width: auto;
            margin-top:20%;

        }
    </style>
    <div class="container">

        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-header">Verification</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="/register-update">
                        {{csrf_field()}}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email }}">

                        <div class="form-group">
                            <div class="col-lg-12 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Verify
                                </button>
                            </div>
                        </div>
                        @if (session('error'))
                            <p class="alert-danger">{{session(('error'))}}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection