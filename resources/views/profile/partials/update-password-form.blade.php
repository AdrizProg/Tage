<x-guest-layout>
    <div>
        <h2 class="text-2xl font-bold mb-6 text-center text-green-700">{{ __('Actualizar contraseña') }}</h2>

        <p class="mt-1 text-sm text-justify">
            {{ __('Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura.') }}
        </p>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="mb-4 text-left">
            <x-input-label for="update_password_current_password" :value="__('Contraseña actual')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="mb-4 text-left">
            <x-input-label for="update_password_password" :value="__('Nueva contraseña:')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="mb-4 text-left">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar nueva contraseña:')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</x-guest-layout>