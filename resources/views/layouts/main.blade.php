<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex items-center justify-between px-4 py-6">
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
                        <input type="text" class="bg-gray-800 rounded-full w-64 pl-8 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')

    </body>
</html>