<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>meetUni</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <meta name="google-site-verification" content="woNeov-H3XYFle9P2QRGIKmaNVCK3qgN5_ug5dr3KIo" />
</head>
<body>
    <div id="app">
        <app-component></app-component>
    </div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
