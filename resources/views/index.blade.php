@extends('layouts/main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                popular movies
            </h2>
            <div class="grid grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection