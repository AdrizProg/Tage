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
    <header class="bg-green-600 p-4 flex items-center justify-between">
        <img alt="Logo" src="favicon.ico" class="w-15 h-20" />

        @include('layouts.navigation')

        <div class="flex items-center space-x-4">

            @can('administrate', Auth::user())
            <a href="nuevaCompostera">
                <button class="flex items-center bg-white text-black px-4 py-2 rounded-lg hover:bg-black hover:text-white">
                    <i class="fas fa-plus mr-1"></i>
                    Compostera
                </button>
            </a>
            @endcan

            <x-dropdown-link :href="route('profile.edit')">
                <img alt="User Avatar" class="h-8 w-8 rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/92L9rHMMkS6tBZKeenI7EMYCL76beZg8KvkikxNlv9IQREunA.jpg" width="30" />
            </x-dropdown-link>
        </div>
    </header>

    <main class="py-10 px-10"> {{ $slot }} </main>

    <footer></footer>
</body>