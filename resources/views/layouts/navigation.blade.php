<nav class="flex items-center space-x-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Composteras') }}
    </x-nav-link>

    <a href="../nuevaCompostera">
        <button class="bg-white text-black px-4 py-2 rounded-lg hover:bg-black hover:text-white">
            <i class="fas fa-plus"></i>
            Compostera
        </button>
    </a>
</nav>