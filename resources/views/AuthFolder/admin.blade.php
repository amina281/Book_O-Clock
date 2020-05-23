@extends('layouts.admin')
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div class="center-block">
                            <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #c7254e !important;" onclick="window.location='{{ url("/post") }}'">Manage Users</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location='{{ url("/bookpost") }}'">Manage Books</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection