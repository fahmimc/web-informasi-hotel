@extends('layouts.app')
@section('content')

<main class="sm:container mx-auto my-10">
    <div class="h-screen w-full flex flex-row px-6 align-start">
        <section class="w-1/4 m-2 flex flex-col break-words bg-white border-1 rounded-md shadow-lg">
            <div class="w-full p-6">
                <h1 class="text-2xl font-bold mb-6"> {{ Auth::user()->name }} </h1>
                
                @if (Auth::user()->images)
                    <img class="rounded-full h-40 w-40 mb-4 mx-auto" src="{{ Auth::user()->images }}" alt="{{ Auth::user()->name }}" >
                @else
                    <button class="bg-green-700 hover:bg-green-500 text-white leading-normal rounded-full h-40 w-40 p-4 mb-4 mx-auto shadow-sm transition duration-300 ease-in-out">Upload Image Profile</button>
                @endif

                @if (Auth::user()->bio)
                    <p class="text-gray-500"> {{ Auth::user()->bio }} </p>
                @else
                    <input type="text" class="form-input my-2 shadow-sm" placeholder="Bio">
                @endif
            </div>
        </section>
        <section class="w-3/4 m-2 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">
            <div class="w-full p-6">
                <p class="text-gray-700">
                    @if ($has_hotel ?? '')
                        <h1 class="mb-6 text-xl font-bold">{{ $has_hotel ->name }}</h1>
                        <p class="mb-4">{{ $has_hotel ->description }}</p>
                        <p class="mb-4">{{ $has_hotel ->address }}</p>
                        <p class="mb-4">{{ $has_hotel ->phone }}</p>
                        <p class="">{{ $has_hotel ->email }}</p>
                    @else
                        @include('layouts.forms')
                    @endif
                </p>
            </div>
        </section>
    </div>
</main>
@endsection
