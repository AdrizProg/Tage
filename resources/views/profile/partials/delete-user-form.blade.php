<x-guest-layout>
    <div>
        <h2 class="text-2xl font-bold mb-6 text-center text-green-700">
            {{ __('Borrar cuenta/Cerrar sesión') }}
        </h2>

        <p class="mt-1 text-sm text-justify">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar. Aunque es una mejor opción simplemente cerrar sessión.') }}
        </p>
    </div>

    <div class="flex justify-between my-2">
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Borrar cuenta') }}</x-danger-button>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();"
                class="inline-flex items-center px-4 py-2 bg-orange-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-500 active:bg-orange-700 focus:outline-none focus:ring-2 focus:bg-orange-600 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Cerrar session') }}
            </button>
        </form>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white p-8 rounded-lg shadow-lg w-full">
            @csrf
            @method('delete')

            <h2 class="text-2xl font-bold mb-6 text-center text-green-700">
                {{ __('¿Estás segur@ de que quieres eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-justify"">
                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.') }}
            </p>

            <div class=" mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Contraseña') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Borrar cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</x-guest-layout>