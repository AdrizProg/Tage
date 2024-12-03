<x-app-layout>
    <x-slot name="header">
        <a href="/nuevaCompostera">
            <x-primary-button>
                {{ __('Nueva compostera') }}
            </x-primary-button>
        </a>

        @if (session('token'))
        <p>Token: {{ session('token') }}</p>
        @endif
        <script>
            sessionStorage.setItem('apiToken', "{{session('token')}}")
        </script>
    </x-slot>

    <div id="dash"></div>
    <!-- @if (session('token'))
        <p>Token: {{ session('token') }}</p>
        @endif -->
        <script>
            sessionStorage.setItem('apiToken', @json(session('token')))
        </script>
</x-app-layout>