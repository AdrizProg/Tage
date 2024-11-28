<x-guest-layout>
    <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Nuevo usuario</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="mb-4 text-left">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Andres" class="block mt-1 w-full" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Correo -->
        <div class="mb-4 text-left">
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="andres@example.com" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- Centros -->
        <div class="mb-4 text-left">
            <x-input-label for="centro" :value="__('Centro')" />

            <x-select id="centro" name="centro" required>

                @foreach ($centros as $centro)
                <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
                @endforeach

                <x-input-error :messages="$errors->get('centro')" class="mt-2" />
            </x-select>
        </div>

        <!-- Contraseña -->
        <div class="mb-4 text-left">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                placeholder="****************"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar contraseña -->
        <div class="mb-4 text-left">
            <x-input-label for="password_confirmation" :value="__('Confirma la contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                placeholder="****************"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Ya existe -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <label for="remember_me" class="flex items-center text-gray-700">
                    <input id="remember-me" type="checkbox" name="remember" class="form-checkbox text-green-500 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-green-500">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-green-500 hover:underline">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
            @endif
        </div>


        <!-- Botón -->
        <x-primary-button>
            {{ __('Crear usuario') }}
        </x-primary-button>
    </form>
</x-guest-layout>
