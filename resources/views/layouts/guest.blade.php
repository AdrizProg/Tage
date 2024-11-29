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
    <style>
        body {
            background-color: #b3edf7;
        }

        .scalaInicial {
            transition: transform 0.3s ease;
        }

        .scalaInicial:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <img alt="Logo" class="mx-auto mb-8" height="100" src="favicon.ico" width="100" />


        <div class="bg-white p-8 rounded-lg shadow-lg w-96" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
            {{ $slot }}
        </div>
</body>

</html>