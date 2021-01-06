@extends('layouts.app')
@section('content')

<div class="w-screen sm:container mx-auto py-4 bg-gray-100 font-sans grid grid-cols-c2">
    <div class="bg-white text-cool-gray-900 shadow-lg mx-2 p-4">
        <img src="{{ $hotel->images }}" alt="{{ $hotel->name }}" width="100%">
        <h1 class="text-3xl font-bold text-cool-gray-900 mt-4 mb-3">
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
    <div class="text-cool-gray-900 mx-2">
        <div class="bg-white p-4 shadow-lg ">
            <iframe class="my-4" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{ $hotel->latitude }},{{ $hotel->longitude }}&amp;key={{ env("GOOGLE_API",null )}}"></iframe>
        </div>
        {{-- @auth
        <div class="mt-4 p-6 bg-white shadow-lg text-center">
            <h1 class="font-bold text-2xl text-cool-gray-800 mb-4">Rate the Hotel!</h1>
            <form action="rate">
                <button class="p-4 text-2xl text-cool-gray-900 hover:text-yellow-300 transition duration-300 ease-in-out" type="submit" value="1">*</button>
                <button class="p-4 text-2xl text-cool-gray-900 hover:text-yellow-300 transition duration-300 ease-in-out" type="submit" value="2">* *</button>
                <button class="p-4 text-2xl text-cool-gray-900 hover:text-yellow-300 transition duration-300 ease-in-out" type="submit" value="3">* * *</button>
                <button class="p-4 text-2xl text-cool-gray-900 hover:text-yellow-300 transition duration-300 ease-in-out" type="submit" value="4">* * * *</button>
                <button class="p-4 text-2xl text-cool-gray-900 hover:text-yellow-300 transition duration-300 ease-in-out" type="submit" value="5">* * * * *</button>
            </form>
        </div>
        @endauth --}}
    </div>
</div>
@endsection