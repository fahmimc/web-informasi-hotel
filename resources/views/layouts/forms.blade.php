<h1 class="font-bold text-cool-gray-900 text-2xl mb-6">Input Data Hotel Anda</h1>
<hr class="divide-cool-gray-900 mb-8">
<form class="grid grid-cols-2 gap-y-4 mt-5 px-8" action="{{ route('dashboard.store') }}" method="post">
    @csrf

    <h1 class="text-xl font-bold">Name :</h1>
    <input type="text" name="name" class="form-input shadow-sm" placeholder="Nama" required autocomplete="name">
    @error('name')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <h1 class="text-lg font-bold">Description :</h1>
    <textarea name="description" cols="30" rows="10" class="form-input shadow-sm" placeholder="Desc" required autocomplete="desc"></textarea>
    @error('description')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <h1 class="text-lg font-bold">Images :</h1>
    <input type="text" name="images" class="form-input shadow-sm" placeholder="Link Gambar" required autocomplete="photo">
    @error('images')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <h1 class="text-lg font-bold">Address :</h1>
    <input type="text" name="address" class="form-input shadow-sm" placeholder="Address" required autocomplete="address-level1">
    @error('address')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <h1 class="text-lg font-bold">Phone :</h1>
    <input type="text" name="phone" class="form-input shadow-sm" placeholder="Phone" required autocomplete="phone">
    @error('phone')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <h1 class="text-lg font-bold">Email :</h1>
    <input type="text" name="email" class="form-input my-2 shadow-sm" placeholder="Email" required autocomplete="email">
    @error('email')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror

    <div class="flex">
        <h1 class="text-lg font-bold">Email :</h1>
        <input type="text" name="email" class="form-input my-2 shadow-sm" placeholder="Email" required autocomplete="email">
        @error('email')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
        
        <h1 class="text-lg font-bold">Email :</h1>
        <input type="text" name="email" class="form-input my-2 shadow-sm" placeholder="Email" required autocomplete="email">
        @error('email')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    
    <button type="submit" class="p-4 my-2 bg-green-500 hover:bg-green-700 text-white rounded-md shadow-sm transition duration-300 ease-in-out col-span-2">Submit</button>
</form>