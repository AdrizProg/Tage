<x-app-layout>
    <div id="contenedorComposteras" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($composteras as $compostera)
        <a href="/estadisticas#compostera{{ $compostera->id }}"
            class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold mb-2">
                    {{ $compostera->nombre }}
                </h2>
            </div>
            <img alt="Imagen compostera" class="w-full h-48 object-cover" height="400"
                src="{{ asset('images/compostera.webp') }}" width="400" />
            <div class="p-4">
                @switch($compostera->tipo)
                @case('Aporte')
                <span class="inline-block inline-block bg-green-500 text-white text-xs px-2 py-1 rounded-full text-xs px-2 py-1 rounded-full">
                    {{ $compostera->tipo }}
                </span>
                @break

                @case('Degradacion')
                <span class="inline-block inline-block bg-blue-500 from-green-400 to-blue-500 text-white text-xs px-2 py-1 rounded-full text-xs px-2 py-1 rounded-full">
                    {{ $compostera->tipo }}
                </span>
                @break

                @case('Maduracion')
                <span class="inline-block inline-block bg-amber-500 text-white text-xs px-2 py-1 rounded-full text-xs px-2 py-1 rounded-full">
                    {{ $compostera->tipo }}
                </span>
                @break

                @default
                <span class="inline-block inline-block bg-gray-200 text-black text-xs px-2 py-1 rounded-full text-xs px-2 py-1 rounded-full">
                    {{ $compostera->tipo }}
                </span>
                @endswitch
            </div>
        </a>
        @endforeach
    </div>

    @if (Auth::check())
    <script>
        if (!sessionStorage.getItem('idUser')) {
            sessionStorage.setItem('idUser', @json(Auth::user()->id));
        }

        if (!sessionStorage.getItem('apiToken')) {
            sessionStorage.setItem('apiToken', @json(session('token')));
        };
    </script>
    @endif
</x-app-layout>
