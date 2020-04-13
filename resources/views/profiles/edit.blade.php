<x-app>
    @if (Session::has('success'))
    <div class="w-100 bg-green-100 rounded-md mb-4 p-4 border border-green-400 text-green-800" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <form action="{{ route('profile.update', $user) }}" method="post" class="mb-4">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name"
                aria-describedby="helpName" value="{{ old('name', $user->name) }}" required>
            @error('name')
            <small id="helpName" class="text-red-500 text-xs mt-2">{{ $message }}t</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username"
                aria-describedby="helpUsername" value="{{ old('username', $user->username) }}" required>
            @error('username')
            <small id="helpUsername" class="text-red-500 text-xs mt-2">{{ $message }}t</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                aria-describedby="helpEmail" value="{{ old('email', $user->email) }}" required>
            @error('email')
            <small id="helpEmail" class="text-red-500 text-xs mt-2">{{ $message }}t</small>
            @enderror
        </div>

        <button type="submit" class="bg-blue-400 text-white rounded px-4 py-2 hover:bg-blue-500">Save</button>

    </form>

    <form action="{{ route('profile.update', $user) }}" method="post" class="mb-4">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                aria-describedby="helpPassword" required>
            @error('password')
            <small id="helpPassword" class="text-red-500 text-xs mt-2">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password
                Confirmation</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation"
                id="password_confirmation" aria-describedby="helpPasswordConfirmation" required>
            @error('password_confirmation')
            <small id="helpPasswordConfirmation" class="text-red-500 text-xs mt-2">{{ $message }}t</small>
            @enderror
        </div>

        <button type="submit" class="bg-blue-400 text-white rounded px-4 py-2 hover:bg-blue-500">Change</button>
    </form>

    <form action="{{ route('profile.avatar', $user) }}" method="post" enctype="multipart/form-data" class="mb-4">
        @csrf
        @method('PATCH')

        <div class="mb-6">

            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>
            <div class="flex">
                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar"
                    aria-describedby="helpAvatar" required>
                <img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="40">
            </div>
            @error('avatar')
            <small id="helpAvatar" class="text-red-500 text-xs mt-2">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="bg-blue-400 text-white rounded px-4 py-2 hover:bg-blue-500 mr-4">Submit</button>
        <a href="{{ route('profile', $user) }}" class="rounded border border-gray-300 px-4 py-2 text-black text-sm hover:border-gray-700">Cancel</a>
    </form>
</x-app>
