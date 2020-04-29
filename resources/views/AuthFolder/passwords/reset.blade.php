@extends('layouts.dashboard')
@section('content')

    <div class="container">

            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
                        <form method="POST" action="/reset-password">
                            {{csrf_field()}}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group row">
                                <label for="email" class="col-lg-4 control-label">E-Mail Address</label>
                                <div class="col-lg-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?: old('email') }}" autocomplete="email" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-lg-4 control-label">Password</label>
                                <div class="col-lg-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                </div>

                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-lg-4 control-label">Confirm Password</label>
                                <div class="col-lg-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection