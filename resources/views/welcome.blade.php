<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido</title>


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5dc;
        }
    </style>
</head>

<body class="flex justify-center items-center min-h-screen">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <main>
        <div class="bg-white rounded-lg shadow-lg p-4 w-80">
            <div class="flex justify-between items-center mb-4">
                <i class="fas fa-home text-green-700 text-2xl"></i>
                <span class="text-gray-700 text-lg">Compost Management</span>
                <i class="fas fa-cog text-green-700 text-2xl"></i>
            </div>
            <div class="bg-green-700 text-white rounded-lg p-4 mb-4">
                <div class="flex justify-center mb-2">
                    <i class="fas fa-recycle text-6xl"></i>
                </div>
                <div class="text-center text-2xl">333</div>
                <div class="text-center text-sm">GRO KARS CO</div>
            </div>
            <div class="bg-gray-200 rounded-lg p-4 mb-4">
                <div class="text-center text-lg mb-2">Compost Management</div>
                <div class="text-center text-sm text-gray-600 mb-4">for demonstration</div>
                <div class="bg-white rounded-full p-2 mb-4 flex items-center">
                    <span class="text-gray-600 text-sm">Add Data</span>
                    <div class="flex-grow mx-2">
                        <div class="bg-green-700 h-2 rounded-full" style="width: 50%;"></div>
                    </div>
                    <i class="fas fa-plus text-green-700"></i>
                </div>
                <div class="flex justify-between mb-4">
                    <button class="bg-green-700 text-white rounded-full px-4 py-2">Add</button>
                    <button class="bg-green-700 text-white rounded-full px-4 py-2">Dashboard</button>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 rounded-full p-4 mb-2">
                        <i class="fas fa-home text-green-700 text-2xl"></i>
                    </div>
                    <span class="text-sm text-gray-600">Dashboard</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 rounded-full p-4 mb-2">
                        <i class="fas fa-seedling text-green-700 text-2xl"></i>
                    </div>
                    <span class="text-sm text-gray-600">Science</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-200 rounded-full p-4 mb-2">
                        <i class="fas fa-satellite text-green-700 text-2xl"></i>
                    </div>
                    <span class="text-sm text-gray-600">Satellite</span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>