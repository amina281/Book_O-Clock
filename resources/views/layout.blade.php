<!doctype html>
<html>
<head>
    @include('Layout.head')
</head>
<body>

        @include('Layout.header')


    <div class="container">
    <div id="main" class="row">
        @yield('content')
    </div>


        @include('Layout.footer')

</div>
</body>
</html>