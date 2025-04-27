<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
</head>

<body class="text-dark bg-light">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="min-height: 100vh;">
        <div class="mt-6">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
