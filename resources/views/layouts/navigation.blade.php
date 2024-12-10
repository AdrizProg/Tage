<nav class="flex items-center space-x-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard', 'estadisticas', 'registro')">
        {{ __('Composteras') }}
    </x-nav-link>

    <x-nav-link :href="route('registros')" :active="request()->routeIs('registros')">
        {{ __('Registros') }}
    </x-nav-link>

    @can('administrate', Auth::user())
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
            {{ __('Usuarios') }}
        </x-nav-link>
    </div>
    @endcan
</nav>