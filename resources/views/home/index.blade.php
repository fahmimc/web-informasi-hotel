<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen w-screen bg-cool-gray-100 text-cool-gray-600 antialiased leading-none font-sans flex flex-col">

    {{-- CONTENT --}}
    <div class="w-full h-72 p-6 banner-bg text-center shadow-md">
        {{-- BANNER IMAGES --}}
        <div class="flex flex-col h-full justify-center">
            <h1 class="text-cool-gray-100 font-bold text-6xl my-2">Informasi Hotel</h1>
            <p class="text-cool-gray-300 text-2xl my-2">Ini placeholder buat tagline, tapi masih dikosongin karenta binyung!</p>
        </div>
        {{-- SEARCH BAR --}}
        <form class="flex h-14 w-5/12 mx-auto" action="search" method="GET">
            <input class="form-input rounded-md border-none shadow-lg w-full" type="search" name="search" placeholder="Cari Hotel">
            {{-- <button class="bg-red-700 text-white p-3" type="submit">Search</button> --}}
        </form>
    </div>
</body>
</html>