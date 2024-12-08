<nav class="flex items-center space-x-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Composteras') }}
    </x-nav-link>

    <x-nav-link :href="route('registros')" :active="request()->routeIs('registros')">
        {{ __('Registros') }}
    </x-nav-link>

    <x-nav-link href="users" :active="request()->routeIs('users')">
        {{ __('CRUD') }}
    </x-nav-link>
</nav>