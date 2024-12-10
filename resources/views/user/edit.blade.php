<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="text-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
                <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Editando a {{$user->name}}</h2>

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    {{ method_field('PATCH') }}
                    @csrf
                    <!-- Nombre -->
                    <div class=" mb-4 text-left">
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" type="text" name="name" :value="old('name', $user?->name)" required autofocus autocomplete="name" placeholder="name" class="block mt-1 w-full" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Correo -->
                    <div class="mb-4 text-left">
                        <x-input-label for="email" :value="__('Correo')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="email" :value="old('email', $user?->email)" required autocomplete="email" />
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
                            :value="old('password', $user?->password)"
                            placeholder="Tu contraseña"
                            required
                            autocomplete="password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Botón -->
                    <x-primary-button>
                        {{ __('Editar') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <a type="button" href="{{ route('users.index') }}">
        <button class="block rounded-md bg-green-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            {{ __('Volver') }}
        </button>
    </a>
</x-app-layout>