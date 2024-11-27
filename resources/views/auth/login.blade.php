<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Bienvenido</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Enter your email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6"">
            <x-input-label for=" password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            placeholder="****************"
            required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-6">

            <div class="flex items-center">
                <input id="remember-me" type="checkbox" name="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-gray-900">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-green-600 hover:underline">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <x-primary-button class="ms-3">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-guest-layout>