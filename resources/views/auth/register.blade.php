<div class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
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
                    <x-input-label for="centro_id" :value="__('Centro')" />

                    <x-select id="centro" name="centro_id" required>

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

                <!-- Botón -->
                <x-primary-button>
                    {{ __('Crear usuario') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</div>