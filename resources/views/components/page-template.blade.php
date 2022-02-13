<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-9">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chris Flowers - @yield('title')</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
