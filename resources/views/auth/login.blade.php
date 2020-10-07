<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="md-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                            <input class="corder border-gray-400 p-2 w-full" type="email" name="email" id="email" autocomplete="email" value="{{ old('email')}}" required>
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                            <input class="corder border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="current-password" required>
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div>
                                <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="mr-2 bg-blue-400 mr-2 px-4 py-2 rounded hover:bg-blue-500 text-white">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
