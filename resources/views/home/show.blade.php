@extends('layouts.app')
@section('content')

<div class="sm:container mx-auto my-10 bg-gray-100 w-screen h-screen font-sans flex flex-row items-start justify-center">
    <div class="w-1/3 mx-2 p-8 bg-white shadow-lg">
        <img src="{{ $hotel->images }}" alt="{{ $hotel->name }}">
        <h1 class="text-3xl font-bold text-cool-gray-900 mt-8 mb-10">
            {{ $hotel->name }}
        </h1>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Desc:</span> {{ $hotel->description }}
        </p>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Address:</span> {{ $hotel->address }}
        </p>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Phone:</span> {{ $hotel->phone }}
        </p>
        <p class="text-md text-cool-gray-600">
            <span class="font-bold">Email:</span> {{ $hotel->email }}
        </p>
    </div>
    <div class="w-1/3 mx-2">
        <div class="mb-2 p-8 bg-white shadow-lg">
            <iframe class="my-4" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{ $hotel->latitude }},{{ $hotel->longitude }}&amp;key={{ env("GOOGLE_API",null )}}"></iframe>
            <a href="https://www.latlong.net/c/?lat=-{{ $hotel->latitude }}&long={{ $hotel->longitude }}" target="_blank">({{ $hotel->latitude }}, {{ $hotel->longitude }})</a>
        </div>
        <div class="mt-4 p-8 bg-white shadow-lg text-center">
            <button class="w-1/3 p-4 text-white bg-green-600 hover:bg-green-500 transition duration-300 ease-in-out">Like</button>
            <button class="w-1/3 p-4 text-white bg-red-600 hover:bg-red-500 transition duration-300 ease-in-out">Dislike</button>
        </div>
    </div>
</div>
@endsection