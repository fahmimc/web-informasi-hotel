@extends('layouts.app')
@section('content')
<main class="w-screen sm:container mx-auto py-6">
    <div class="w-full grid grid-cols-c1 gap-4">
        {{-- Status --}}
        @if ($message = Session::get('success'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4 col-span-2" role="alert">
                {{ $message }}
            </div>
        @endif

        {{-- Sisi kiri --}}
        <div class="flex flex-col">
            {{-- Profile --}}
            <div class="bg-white p-5 row-span-2 shadow-lg mb-2">
                <h1 class="text-2xl font-bold mb-5"> {{ Auth::user()->name }} </h1>
    
                @if (Auth::user()->images)
                    <img class="rounded-full h-40 w-40 mb-6 mx-auto" src="{{ Auth::user()->images }}" alt="{{ Auth::user()->name }}" >
                @else
                    <button class="block bg-green-700 hover:bg-green-500 text-white leading-normal rounded-full h-40 w-40 p-4 mb-6 mx-auto shadow-sm transition duration-300 ease-in-out">{{ Auth::user()->name }}</button>
                @endif
    
                @if (Auth::user()->bio)
                    <p class="text-gray-500"> "{{ Auth::user()->bio }}" </p>
                @else
                    <p class="text-gray-500">Placeholder Bio</p>
                @endif
            </div>
            @if ($has_hotel ?? '')
                {{-- Status hotel stuff --}}
                <div class="bg-white p-5 shadow-lg leading-normal text-xl">
                    <h1 class="text-cool-gray-900">Jumlah pengunjung: <span class="font-bold">{{ $has_hotel  -> click_counter }}</span></h1>
                    <h1 class="text-cool-gray-900">Rating hotel: <span class="font-bold">{{ $has_hotel  -> rating }}</span></h1>
                </div>

                {{-- Administrator buttons --}}
                <div class="bg-white p-5 shadow-lg mt-2">
                    <button type="submit" title="Broadcast Pesan" class="w-full bg-blue-800 hover:bg-blue-600 text-white px-8 py-4 my-1 font-bold transition duration-300 ease-in-out">Broadcast Pesan</button>
                    <button type="submit" title="Edit Data Hotel" class="w-full bg-yellow-400 hover:bg-yellow-300 text-white px-8 py-4 my-1 font-bold transition duration-300 ease-in-out">
                        <a href="{{ route('dashboard.edit',$has_hotel->id) }}">
                            Edit Data Hotel
                        </a>
                    </button>
                    <form action="{{ route('dashboard.destroy', $has_hotel->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete Hotel" class="w-full bg-red-800 hover:bg-red-600 text-white px-8 py-4 my-1 font-bold transition duration-300 ease-in-out"  onclick="return confirm('Apakah Anda yakin ingin menghapus hotel ini?')">Delete Hotel</button>
                    </form>
                </div>
            @endif
        </div>

        {{-- Sisi kanan --}}
        <div class="flex flex-col">
            {{-- Hotel stuff --}}
            <div class="bg-white p-5 shadow-lg mb-2 flex flex-grow">
                @if ($has_hotel ?? '')
                    <img class="mr-2 w-1/2" src="{{ $has_hotel -> images }}" alt="{{ $has_hotel -> name }}">
                    <div class="ml-2 w-1/2">
                        {{-- Data hotel --}}
                        <h1 class="mb-4 text-xl font-bold">{{ $has_hotel -> name }}</h1>
                        <p class="mb-4 text-gray-900">{{ $has_hotel -> description }}</p>
                        <p class="mb-4 text-gray-900">{{ $has_hotel -> address }}</p>
                        <p class="mb-4 text-gray-900">{{ $has_hotel -> phone }}</p>
                        <p class="text-gray-900">{{ $has_hotel -> email }}</p>
                    </div>
                @else
                    {{-- Input hotel form --}}
                    @include('layouts.forms')
                @endif
            </div>
            {{-- Broadcast panel --}}
            <div class="bg-white p-5 shadow-lg max-h-52 overflow-auto mt-2">
                <h1 class="text-2xl font-bold"> Broadcast </h1>
                <hr class="divide-cool-gray-900 my-4">
                @for ($i = 1; $i <= 13; $i++)
                    <p class="text-cool-gray-900 mb-4"><span class="font-bold">[ {{$i}} ] :</span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, veritatis.</p>
                @endfor
            </div>
        </div>
    </div>
</main>
@endsection
