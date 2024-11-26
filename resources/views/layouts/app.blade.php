<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Visual -->
    <title>Tage</title>

    <!-- Enlaces -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-green-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

<!-- Scripts -->
<script src="https://cdn.tailwindcss.com"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</html>