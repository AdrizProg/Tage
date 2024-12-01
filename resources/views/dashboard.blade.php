<x-app-layout>
    <x-slot name="header">
        <x-primary-button>
            {{ __('Nueva compostera') }}
        </x-primary-button>

        @if (session('token'))
        <p>Token: {{ session('token') }}</p>
        @endif
    </x-slot>

    <body class="bg-gray-100 font-roboto">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-bold mb-2">
                            Card Title 1
                        </h2>
                    </div>
                    <img alt="A placeholder image of 400x400 pixels with a gray background and white text in the center" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/xno9T45D0GI8Jl9ryOq578L6TUkdReN4IKWVsmzeQedjTvsnA.jpg" width="400" />
                    <div class="p-4">
                        <span class="inline-block bg-green-200 text-green-800 text-xs px-2 py-1 rounded-full">
                            Aporte
                        </span>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-bold mb-2">
                            Card Title 2
                        </h2>
                    </div>
                    <img alt="A placeholder image of 400x400 pixels with a gray background and white text in the center" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/xno9T45D0GI8Jl9ryOq578L6TUkdReN4IKWVsmzeQedjTvsnA.jpg" width="400" />
                    <div class="p-4">
                        <span class="inline-block bg-red-200 text-red-800 text-xs px-2 py-1 rounded-full">
                            Degradacion
                        </span>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-bold mb-2">
                            Card Title 3
                        </h2>
                    </div>
                    <img alt="A placeholder image of 400x400 pixels with a gray background and white text in the center" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/xno9T45D0GI8Jl9ryOq578L6TUkdReN4IKWVsmzeQedjTvsnA.jpg" width="400" />
                    <div class="p-4">
                        <span class="inline-block bg-yellow-200 text-yellow-800 text-xs px-2 py-1 rounded-full">
                            Maduracion
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>