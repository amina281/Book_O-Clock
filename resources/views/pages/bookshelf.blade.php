@extends('layouts.master')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/bookshelf.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/font-awsome.css') }}">
@endsection

@section('content')
    <div class="bookshelf-page">
        <div class="container">
            <div class="header">
                <div class="clear">
                    <i class="fa fa-refresh"></i>
                </div>
                <div id="date"></div>
            </div>

            <div class="content">
                <ul id="list">
                    <li class="item">
                        <i class="fa fa-circle-thin complete"></i>
                        <p class="text">Drink</p>
                        <i class="fa fa-trash-o delete"></i>
                    </li>
                </ul>
                <div class="add-item">
                    <i class="fa fa-plus-circle"></i>
                    <input type="text" id="input" placeholder="Add bookshelf"/>
                </div>
            </div>
        </div>
    </div>
@endsection