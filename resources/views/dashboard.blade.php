@extends('layout')
@section('content')


    <div class="container">

        <h1>Welcome to Dashboard</h1>
        <p><a href="{{ url('/logout') }}">Logout</a></p>
    </div>
@endsection