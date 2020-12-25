<div class="w-3/5 bg-white p-6 shadow-lg">
    <h1 class="font-bold text-2xl mb-4">Test</h1>
    <hr class="divide-cool-gray-900">
    <form class="grid gap-y-4 mt-6" action="" method="post">
        @csrf
        <h1 class="text-xl font-bold text-cool-gray-800">Name :</h1>
        <input type="text" name="name" class="form-input shadow-sm" placeholder="Nama" required autocomplete="name">
        @error('name')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Description :</h1>
        <textarea name="description" cols="30" rows="3" class="form-input shadow-sm" placeholder="Desc" required autocomplete="desc"></textarea>
        @error('description')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Images :</h1>
        <input type="text" name="images" class="form-input shadow-sm" placeholder="Link Gambar" required autocomplete="photo">
        @error('images')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Address :</h1>
        <input type="text" name="address" class="form-input shadow-sm" placeholder="Address" required autocomplete="address-level1">
        @error('address')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Phone :</h1>
        <input type="number" name="phone" class="form-input shadow-sm" placeholder="Phone" required autocomplete="phone">
        @error('phone')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Email :</h1>
        <input type="tel" name="email" class="form-input my-2 shadow-sm" placeholder="Email" required autocomplete="email">
        @error('email')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    
        <h1 class="text-lg font-bold text-cool-gray-800">Coordinate :</h1>
        <div class="flex">
            <input type="text" name="latitude" class="w-1/2 form-input mr-2 shadow-sm" placeholder="Latitude" required>
            @error('email')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
            
            <input type="text" name="longitude" class="w-1/2 form-input ml-2 shadow-sm" placeholder="Longitude" required>
            @error('email')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="p-4 my-2 bg-green-500 hover:bg-green-700 text-white rounded-md shadow-sm transition duration-300 ease-in-out col-span-2">Submit</button>
    </form>
</div>