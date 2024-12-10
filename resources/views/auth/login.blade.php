<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Bienvenido</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Correo -->
        <div class="mb-4 text-left">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" type="email" name="email" placeholder="Introduce tu correo electrónico" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mb-4 text-left">
            <x-input-label for=" password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                placeholder="****************"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Contraseña olvidada -->
        <div class="flex items-center justify-between mb-6">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-green-500 hover:underline">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
            @endif
        </div>

        <!-- Botón -->
        <x-primary-button>
            {{ __('Iniciar sesión') }}
        </x-primary-button>
    </form>
</x-guest-layout>