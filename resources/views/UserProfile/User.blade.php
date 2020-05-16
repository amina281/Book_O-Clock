@extends('layouts.dashboard')
@section('content')

    <br>
    <div class="container">
        <div class="box">
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
                                    <form>
                                        <div class="form-group">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName"
                                                   placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Password">
                                        </div>
                                        <br>

                                        <button type="submit" id="submit" class="btn btn-primary btn-block">
                                            Validate
                                        </button>
                                        <br>
                                        <br>

                                    </form>

                                </div>


                                <div class="tab-pane" id="profile">

                                    <form>
                                        <div class="form-group">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Email">
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>

                                <div class="tab-pane" id="Orders">

                                    <form>
                                        <br>
                                        <div class="form-group">
                                            <label for="inputName">Order ID</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName">Order Date</label>
                                            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Email">
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
