<x-master>
    <div class="mx-auto flex justify-center">
        <div class="rounded-lg px-8 py-6 bg-gray-200 border border-gray-300">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label for="username"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>

                    <input id="username" type="text" class="form-control @error('username') border-red-400 @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') border-red-400 @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') border-red-400 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') border-red-400 @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>

                <div class="mb-2">
                    <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-400 font-bold text-white">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-master>
