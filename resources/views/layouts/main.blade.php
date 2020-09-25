<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto px-4 flex items-center justify-between px-4 py-6">
                <ul class="flex items-center">
                    <li>
                        <a href="#">Logo</a>
                    </li>
                    <li class="ml-16">
                        <a class="hover:text-gray-300" href="#">Movies</a>
                    </li>
                    <li class="ml-6">
                        <a class="hover:text-gray-300" href="#">TV Shows</a>
                    </li>
                    <li class="ml-6">
                        <a class="hover:text-gray-300" href="#">Actors</a>
                    </li>
                </ul>
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" class="bg-gray-800 rounded-full w-64 pl-8 px-4 py-1 text-sm focus:outline-none focus:shadow-outline" placeholder="Search">
                        <div class="absolute top-0">
                            <svg class="w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')

    </body>
</html>