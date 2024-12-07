<nav class="flex items-center space-x-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Composteras') }}
    </x-nav-link>

    <x-nav-link :href="route('registro')" :active="request()->routeIs('registro')">
        {{ __('Hacer un registro') }}
    </x-nav-link>

    <x-nav-link :href="route('registros')" :active="request()->routeIs('registros')">
        {{ __('Registros') }}
    </x-nav-link>
</nav>