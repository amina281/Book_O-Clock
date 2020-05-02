@extends('layouts.dashboard')
@section('content')
    <style>
        .card{
            margin-left: auto;
            margin-right:auto;
            width: auto;
            margin-top:20%;
        }
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>

    <div class="container">
            <div class="col-lg-6 offset-lg-3">
                @if (count($errors)> 0)
                    @foreach($errors ->all() as $error)
                        <p class="alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form  method="POST" action="{{url('/register')}}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-lg-4 control-label">Name</label>
                                <div class="col-lg-8">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-lg-4 control-label">Email</label>
                                <div class="col-lg-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email">
                                    <span id="error_email"></span>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-lg-4 control-label">Password</label>
                                <div class="col-lg-8">
                                    <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">


                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-lg-4 control-label">Confirm Password</label>
                                <div class="col-lg-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12 col-lg-offset-2">
                                    <button type="submit" id ="register" name="register" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <br>

                            @if (session('Status'))
                                <p class="alert-success">{{session(('Status'))}}</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script>
       $(document).ready(function(){
           $('#email').blur(function (){
               var error_email ='';
               var email =$('#email').val();
               var _token =$('input[name="_token"]').val();
                console.log(_token);
               var filter =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-90]{2,4})+$/;
               if(!filter.test(email))
               {
                 $('#error').addClass('has-error');
                   $('#error_email').html('<label class="text-danger"> Invalid Email</label>');
                   $('#register').attr('disabled','disabled');
               }
               else
               {
                   $.ajax({
                       url:"{{ route('email_available.check') }}",
                       method:"POST",
                       data:{email:email, _token:_token},

                       success:function(result)
                       {

                           if(result == 'unique')
                           {
                               $('#error_email').html('<label class="text-success">Email Available</label>');
                               $('#email').removeClass('has-error');
                               $('#register').attr('disabled', false);
                           }
                           else
                           {
                               $('#error_email').html('<label class="text-danger">Email not Available</label>');
                               $('#email').addClass('has-error');
                               $('#register').attr('disabled', 'disabled');
                           }
                       }
                   })
               }
           });
       });
   </script>
@endsection