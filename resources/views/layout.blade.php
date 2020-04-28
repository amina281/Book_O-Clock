<!doctype html>
<html>
<head>
    @include('Layout.head')
<style>
    .b1{
        background-image: url('https://eatingfiction.files.wordpress.com/2019/08/shutterstock_1068141515.jpg');
        height: 100%;
        background-size: cover;
    }

    .copyRight{
      color: #c9e2b3;
    }
</style>
</head>
<body class="b1">

        @include('Layout.header')


    <div class="container">
    <div id="main" class="row">
        @yield('content')
    </div>

<div class="copyRight">
        @include('Layout.footer')
</div>
</div>
</body>
</html>