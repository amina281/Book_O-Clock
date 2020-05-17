@extends('layouts.default')
@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <br>
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Your personal information</span>
                    </div>

                </div>
                <br>
                <div class="portlet-body">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home" aria-controls="home" role="tab"
                                   data-toggle="tab">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile" aria-controls="profile" role="tab"
                                   data-toggle="tab">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Orders" aria-controls="Orders" role="tab"
                                   data-toggle="tab">Orders</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                @if (count($errors)> 0)
                                    @foreach($errors ->all() as $error)
                                        <p class="alert-danger">{{$error}}</p>
                                    @endforeach
                                @endif
                                <form method="POST" action="{{route('userUpdate')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" name="Username" id="inputName" placeholder="Name"  value="{{ $user ->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLastName">Phone Number</label>
                                        <input type="number" name="phonenumber" class="form-control" id="inputPhoneNumber"
                                               placeholder="Phone Number"  value="{{ $user ->phonenumber}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" readonly="readonly" id="exampleInputEmail1"
                                               placeholder="Email"  value="{{ $user ->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                               placeholder="Password"  value="{{ '******'}}">
                                    </div>
                                    <br>

                                    <button type="submit" id="submit" class="btn btn-primary btn-block">
                                        Update
                                    </button>
                                    <br>
                                    <br>
                                    <br>
                                    @if (session('success'))
                                        <p class="alert-success">{{session(('success'))}}</p>
                                    @endif
                                </form>

                            </div>


                        <div class="tab-pane" id="profile">

                            <form>
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" readonly="readonly" placeholder="Name" value="{{ $user ->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputLastName">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" readonly="readonly" placeholder="Email" value="{{ $user ->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="examplerole">Role</label>
                                    <input type="text" class="form-control" readonly="readonly" id="exampleInputEmail1"
                                           placeholder="Role" value="{{ $user ->role}}">
                                </div>
                            <br>
                                <br>
                            </form>
                        </div>

                            <div class="tab-pane" id="Orders" >

                                @if ($EmptySet != '')
                                    <p class="alert-info">{{$EmptySet}}</p>
                                @else
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer ID</th>
                                            <th>Total Value</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($Orders)> 0)
                                            @foreach($Orders as $order)
                                                <tr>
                                                    <td>{{$order->No}}</td>
                                                    <td>{{$order->CustomerId}}</td>
                                                    <td>{{$order->TotalAmount}}</td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        </tbody>

                                    </table>
                                @endif

                            </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>

@endsection