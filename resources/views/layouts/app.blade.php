<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-blue-100">
    <header class="bg-green-600 p-4 flex items-center justify-between w-full">
        <img alt="Logo" src="{{ asset('favicon.ico') }}" class="w-15 h-20" />

        @include('layouts.navigation')

        <div class="flex items-center space-x-4">

            @can('administrate', Auth::user())
            <button id="btnAñadirCompostera" class="flex items-center bg-white text-black px-4 py-2 rounded-lg hover:bg-black hover:text-white">
                <i class="fas fa-plus mr-1"></i>
                Compostera
            </button>
            @endcan

            <a href="{{ route('profile.edit') }}">
                <img alt="User  Avatar" class="h-8 w-8 rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/92L9rHMMkS6tBZKeenI7EMYCL76beZg8KvkikxNlv9IQREunA.jpg" width="30" />
            </a>
        </div>
    </header>

    <main class="py-10 px-10" style="margin-bottom: 15%;">
        {{ $slot }}

        <!-- Formulario añadir compostera -->
        <div id="formulario" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                <h2 class="text-xl font-bold mb-4">Nueva compostera</h2>

                <form id="createForm" action="nuevaCompostera">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Apodo</label>

                        <input type="text" id="apodo" name="apodo" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" id="btnCerrarForm" class="bg-gray-500 text-white px-4 py-2 rounded mr-2 hover:bg-gray-600">Cancelar</button>

                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="w-full bg-gray-800 text-white p-4 flex items-center justify-between">
        <div class=" flex flex-col items-center space-y-1">
            <img alt="Certificado" src="{{ asset('/images/cc.png') }}" class="h-10">

            <img alt="Certificado aa" src="{{ asset('/images/waa.png') }}" class="h-20">
        </div>

        <p class="text-sm text-center">&copy; 2024 Your Company, Inc. All rights reserved.</p>

        <a href="https://github.com/Illian-Santiago/tage.git" target="_blank" rel="noopener noreferrer" class="flex items-center">
            <img src="{{ asset('/images/git.gif') }}" class="h-10">
        </a>
    </footer>

    <script>
        document.querySelector('#btnAñadirCompostera').addEventListener('click', function() {
            document.querySelector('#formulario').classList.remove('hidden');
        });

        document.querySelector('#btnCerrarForm').addEventListener('click', function() {
            document.querySelector('#formulario').classList.add('hidden');
        });
    </script>
</body>