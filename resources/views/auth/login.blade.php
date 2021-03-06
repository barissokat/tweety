<x-master>
    <div class="mx-auto flex justify-center">
        <div class="rounded-lg px-8 py-6 bg-gray-200 border border-gray-300">
            <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email"
                        class="border border-gray-400 p-2 w-full @error('email') border-red-400 @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                        <input id="password" type="password"
                            class="border border-gray-400 p-2 w-full @error('password') border-red-400 @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="text-red-500 text-xs mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="mb-6">
                    <div>
                        <input class="mr-1" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-2">
                    <button type="submit"
                        class="px-6 py-3 rounded text-sm uppercase bg-blue-400 font-bold text-white mr-2">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="text-xs text-gray-700 font-bold" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-master>
