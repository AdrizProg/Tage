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

    <div class="text-center" style="margin-left: 35%; margin-top: 5%;">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
            <h2 class="text-2xl font-bold mb-6">Antes</h2>

            @include('auth.antes')

            <div class="flex flex-row space-x-4 space-x">
                <x-primary-button>
                    {{ __('Anterior') }}
                </x-primary-button>

                <x-primary-button>
                    {{ __('Siguiente') }}
                </x-primary-button>
            </div>
        </div>
    </div>
</x-app-layout>