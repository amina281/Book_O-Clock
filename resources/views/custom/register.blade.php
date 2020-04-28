@extends('layout')

@section('content')
    <style>
        .form-horizontal{

            background-color: #ffffff;
            margin-right: -30px;
            margin-left: -30px;
            margin-bottom: 50%;
        }
    </style>
<div class="container">
        <div class="col-lg-6 offset-lg-3">
            @if (count($errors)> 0)
                @foreach($errors ->all() as $error)
                    <p class="alert-danger">{{$error}}</p>
                @endforeach
                @endif
                <h2 align="center">Register Here</h2><hr>

            <form class="form-horizontal" action="{{route('custom.register')}}" method="post">
                {{csrf_field()}}
                    <div class="form-group row">
                        <label for="inputEmail" class="col-lg-4 control-label">Email</label>
                        <div class="col-lg-8">
                            <input type="text"  class="form-control" name="Email" value="{{old('Email')}}" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputUsername" class="col-lg-4 control-label">Username</label>
                        <div class="col-lg-8">
                            <input type="text"  class="form-control" name="Username" value="{{old('Username')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputRole" class="col-lg-4 control-label">Role</label>
                        <div class="col-lg-8">
                            <input type="text"  class="form-control" name="Role" value="{{old('Role')}}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPhone" class="col-lg-4 control-label">Phone Number</label>
                        <div class="col-lg-8">
                            <input type="number"  class="form-control" name="PhoneNumber" value="{{old('PhoneNumber')}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-lg-4 control-label">Password</label>
                        <div class="col-lg-8">
                            <input type="password"  class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-lg-4 control-label">Retype password</label>
                        <div class="col-lg-8">
                            <input type="password"  class="form-control" name="password_confirmation" placeholder="Retype password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary btn-block">Rregjistrohu</button>
                        </div>
                    </div>


                   <br>
                @if (session('Status'))

                    <p class="alert-success">{{session(('Status'))}}</p>

                @endif
            </form>
        </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
        crossorigin="anonymous">

</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous">

</script>

@stop