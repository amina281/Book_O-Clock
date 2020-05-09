<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Product O\' Clock) }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="icon" href="/img/dictionary_book_19723.png"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,400;1,700&family=Anton&family=Dancing+Script:wght@700&family=Kaushan+Script&family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    @yield('styles')

</head>

<body>
<h1>hiiiiiiiiiiiiiiiiiiiiiiiii</h1>
@include('partials.header')

@yield('content')

@include('partials.footer')


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@yield('script')

</body>
</html>