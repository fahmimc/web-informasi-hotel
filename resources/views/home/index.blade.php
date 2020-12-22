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

<body class="bg-cool-gray-900 h-screen w-screen antialiased leading-none font-sans flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/dashboard') }}" class="no-underline hover:underline text-sm font-normal text-cool-gray-400 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-cool-gray-400 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-cool-gray-400 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="w-11/12 sm:w-8/12">
            <h1 class="mb-8 text-4xl sm:text-5xl text-cool-gray-100 font-light text-center tracking-wider">
                {{ config('app.name') }}
            </h1>
            <form class="flex w-full" action="">
                <input class="form-input rounded-none w-full" type="search" placeholder="Cari Hotel">
                <button class="bg-red-700 text-white p-3" type="submit">Search</button>
            </form>
        </div>
        <div class="w-11/12 mt-8 flex grid grid-cols-3 grid-rows-2 gap-6">
            @foreach ($hotels as $h)
                <a class="block bg-white p-4 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105" href="{{ route('home.show', $h->id) }}">
                    <h1 class="text-lg font-bold text-cool-gray-900 mb-4">{{ $h->name }}</h1>
                    <p class="text-cool-gray-600">{{ \Illuminate\Support\Str::limit($h->description, 125, $end='...') }}</p>
                </a>
            @endforeach
            <div class="col-span-3">
                {!! $hotels->links() !!}
            </div>
        </div>
    </div>
</body>
</html>