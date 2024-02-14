<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larabooks - Inicio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <div class="px-2 md:px-20 pt-6 max-w-7xl mx-auto">
            <!-- nav -->
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center text-3xl font-bold text-true-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mr-2" viewBox="0 0 1024 1024"
                             version="1.1">
                            <path d="M1000.2 341.9L548.5 614.2 70.4 502.8l478.1-259.9z" fill="#9ED5E4"/>
                            <path
                                d="M548.5 628.4c-1.1 0-2.2-0.1-3.2-0.4l-478-111.4c-5.8-1.3-10.1-6.1-10.9-12-0.8-5.9 2.1-11.6 7.3-14.5l478-259.9c3-1.6 6.5-2.1 9.9-1.4l451.7 99c5.7 1.3 10.1 5.9 11 11.6 1 5.8-1.7 11.5-6.7 14.5L555.8 626.4c-2.2 1.3-4.8 2-7.3 2z m-438.3-131L546 598.9l416.1-250.8L550.6 258 110.2 497.4z"
                                fill="#154B8B"/>
                            <path
                                d="M548.5 806L92.1 694.6c-43.4-5.4-71.7-71.2-69.5-120.7 1.3-29.8 17.8-71.2 69.5-71.2l456.3 111.4V806h0.1z"
                                fill="#9ED5E4"/>
                            <path
                                d="M548.5 820.3c-1.1 0-2.3-0.1-3.4-0.4L89.5 708.6c-24.4-3.4-46.3-21.6-61.9-51.2-13.3-25.3-20.5-56.7-19.3-84.1 0.5-12 3.7-35 18.8-54.8 10.5-13.7 30.2-30 65-30 1.1 0 2.3 0.1 3.4 0.4l456.3 111.4c6.4 1.6 10.9 7.3 10.9 13.9V806c0 4.4-2 8.5-5.5 11.2-2.5 2-5.6 3.1-8.7 3.1z m-458-303.2c-13.9 0.4-51.4 6.3-53.6 57.5-1 22.6 5 48.6 16 69.6 15.2 29 32.2 35.2 41 36.3 0.5 0.1 1.1 0.2 1.6 0.3l438.7 107.1V625.4L90.5 517.1z"
                                fill="#154B8B"/>
                            <path d="M1000.2 533.7L548.5 806V614.2l451.7-272.3z" fill="#9ED5E4"/>
                            <path
                                d="M548.5 820.3c-2.4 0-4.8-0.6-7-1.8-4.5-2.5-7.3-7.3-7.3-12.4V614.2c0-5 2.6-9.6 6.9-12.2l451.7-272.3c4.4-2.7 9.9-2.7 14.4-0.2s7.3 7.3 7.3 12.4v191.8c0 5-2.6 9.6-6.9 12.2L555.8 818.2c-2.2 1.4-4.8 2.1-7.3 2.1z m14.2-198.1v158.5l423.2-255.1V367.2l-423.2 255z"
                                fill="#154B8B"/>
                            <path d="M825.4 343.8L759.6 379l-243.7-49.8 70.7-35.3z" fill="#F7F8F9"/>
                            <path
                                d="M759.6 387c-0.5 0-1.1-0.1-1.6-0.2L514.3 337c-3.3-0.7-5.9-3.4-6.3-6.8s1.3-6.7 4.4-8.2l70.7-35.3c1.6-0.8 3.4-1 5.2-0.7L827 336c3.3 0.7 5.8 3.4 6.3 6.7 0.5 3.3-1.2 6.6-4.1 8.2l-65.8 35.2c-1.2 0.6-2.5 0.9-3.8 0.9z m-219.4-61l218.2 44.6 43.8-23.5-214.5-44.8-47.5 23.7z"
                                fill="#154B8B"/>
                        </svg>
                        Larabooks
                    </div>
                    <div class="flex flex-wrap items-center justify-center antialiased lg:ml-20 pt-1">
                        <a href="/"
                           class="flex items-center justify-center mr-10 text-base text-gray-700 text-opacity-90 font-medium tracking-tight hover:text-cool-gray-600 transition duration-150 ease-in-out">
                            Inicio
                        </a>
                        <a href="/books"
                           class="flex items-center justify-center mr-10 text-base text-gray-700 text-opacity-90 font-medium tracking-tight hover:text-cool-gray-600 transition duration-150 ease-in-out">
                            Libros
                        </a>
                    </div>
                </div>

                @if(Route::has('login'))
                    <div class="flex items-center justify-center">
                        @auth
                            <a
                                href="{{ route('dashboard') }}"
                                class="px-6 py-3 rounded-3xl font-medium bg-gradient-to-b from-gray-900 to-black text-white outline-none focus:outline-none hover:shadow-md hover:from-true-gray-900 transition duration-200 ease-in-out">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="mr-5 text-lg font-medium text-true-gray-800 hover:text-cool-gray-700 transition duration-150 ease-in-out">Login</a>

                            @if(Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="px-6 py-3 rounded-3xl font-medium bg-gradient-to-b from-gray-900 to-black text-white outline-none focus:outline-none hover:shadow-md hover:from-true-gray-900 transition duration-200 ease-in-out">
                                    Regístrese
                                </a>
                            @endif
                        @endauth

                    </div>
                @endif
            </div>
            <!-- /nav -->

            <!-- hero section -->
            <div class="flex flex-col-reverse md:flex-row items-center mt-20 lg:mt-32 gap-8">
                <div class="text-left md:w-1/2 flex flex-col gap-5">
                    <div class="text-4xl md:text-6xl font-semibold text-gray-900 leading-none">
                        Descubre el mundo de la programación
                    </div>
                    <div class="text-xl font-light text-true-gray-500 antialiased">
                        Aprovecha las mejores lecturas para ampliar tus conocimientos y habilidades
                    </div>
                    <a href="#reviews"
                       class="w-fit px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 hover:to-blue-700 transition duration-200 ease-in-out">
                        Revisa las reseñas
                    </a>
                    <div class="text-left">
                        <a href="#featured"
                           class="flex items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                    </div>

                </div>
                <img src="https://res.cloudinary.com/dy09hqrno/image/upload/v1691588230/hero_wtour7.png" alt="hero image" class="md:w-1/2 rounded-xl mb-10 shadow-md">
            </div>
            <!-- /hero section -->

            <!-- Featured section -->
            <div class="my-20" id="featured">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900 leading-none">
                    Destacados
                </h2>

                <!-- Featured Grid -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                    @foreach($books as $book)
                        <!-- Featured Item -->
                        <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                            <div>
                                <img alt="person capturing an image"
                                     src="https://m.media-amazon.com/images/I/41SH-SvWPxL._SX342_SY445_QL70_ML2_.jpg"
                                     tabindex="0"
                                     class="focus:outline-none w-full h-44 object-contain py-4"/>
                            </div>
                            <div>
                                <div class="p-4">
                                    <div>
                                        <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $book->name }}</h2>
                                        <p class="text-sm text-gray-500">por
                                            @foreach($book->authors as $author)
                                                <span>{{ $author->name }}</span>
                                                @if(!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="text-sm text-gray-600 py-2">
                                        {{ $book->description }}
                                    </div>
                                    <div class="flex mt-4 gap-1">
                                        @foreach($book->genres as $genre)
                                            <div>
                                                <p tabindex="0"
                                                   class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                                    {{ $genre->name }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="flex items-center mt-4 gap-2">
                                        <div class="flex items-center">
                                            <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span class="text-gray-500 text-xs">{{ number_format($book->reviews_avg_stars, 1) }} estrellas</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                 version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                            <span class="text-gray-500 text-xs ml-1">{{ $book->reviews_count }} reseñas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- /Featured Item -->
                    @endforeach
                </div>
                <!-- /Featured Grid -->
            </div>
            <!-- /Featured section -->


            <!-- Reviews section -->
            <div class="my-20" id="reviews">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900 leading-none">
                    Reseñas
                </h2>

                <!-- Review Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                    <!-- Review Item -->
                    <div class="bg-white p-4 rounded-xl flex gap-6 items-center shadow-xs">
                        <div class="w-1/4 flex flex-col items-center">
                            <img src="https://m.media-amazon.com/images/I/41SH-SvWPxL._SX342_SY445_QL70_ML2_.jpg"
                                 alt="image book clean code"
                                 class="w-4/5">
                            <p class="text-gray-600 text-sm text-center mt-2">Clean Code</p>
                        </div>
                        <div class="flex flex-col gap-2 w-3/4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-base text-gray-900">Excelente guía para mejorar la calidad del código</p>
                            <p class="text-base text-gray-500">Este libro me ha ayudado enormemente a escribir código más
                                limpio
                                y comprensible. Los ejemplos y
                                principios presentados son muy claros y fáciles de seguir. Lo recomendaría a cualquier
                                programador
                                que desee mejorar la calidad de su código.</p>
                            <p class="text-sm text-gray-400">Laura Gómez - 12/04/2023</p>
                        </div>
                    </div>
                    <!-- /Review Item -->

                    <!-- Review Item -->
                    <div class="bg-white p-4 rounded-xl flex gap-6 items-center  shadow-xs">
                        <div class="w-1/4 flex flex-col items-center">
                            <img
                                src="https://images.cdn2.buscalibre.com/fit-in/360x360/03/1a/031af9d7e401bb2d08911c317ecbedad.jpg"
                                alt="image book pragmatic programmer"
                                class="w-4/5">
                            <p class="text-gray-600 text-sm text-center mt-2">The Pragmatic Programmer</p>
                        </div>
                        <div class="flex flex-col gap-2 w-3/4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-base text-gray-900">Imprescindible para cualquier programador</p>
                            <p class="text-base text-gray-500">Este libro es una joya. Ofrece consejos prácticos y
                                perspectivas únicas sobre el arte de programar. Me ha ayudado a mejorar mis habilidades de
                                resolución de problemas y a adoptar un enfoque más pragmático en mi trabajo. Es un libro que
                                debería estar en la estantería de todo programador.</p>
                            <p class="text-sm text-gray-400">Juan Rodríguez - 12/02/2023</p>
                        </div>
                    </div>
                    <!-- /Review Item -->

                    <!-- Review Item -->
                    <div class="bg-white p-4 rounded-xl flex gap-6 items-center  shadow-xs">
                        <div class="w-1/4 flex flex-col items-center">
                            <img src="https://m.media-amazon.com/images/I/7169VZEOYFL._AC_UF1000,1000_QL80_.jpg"
                                 alt="image book design pattern"
                                 class="w-4/5">
                            <p class="text-gray-600 text-sm text-center mt-2">Design Patterns: Elements of Reusable
                                Object-Oriented Software</p>
                        </div>
                        <div class="flex flex-col gap-2 w-3/4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-base text-gray-900">Guía esencial para el diseño de software</p>
                            <p class="text-base text-gray-500">Este libro es un tesoro de conocimiento sobre patrones de
                                diseño. Las explicaciones son claras y los ejemplos prácticos son muy útiles para comprender
                                cómo aplicar los patrones en situaciones reales. Ha sido una lectura reveladora y ha
                                mejorado mi forma de abordar el diseño de software.</p>
                            <p class="text-sm text-gray-400">Sofía López - 01/04/2023</p>
                        </div>
                    </div>
                    <!-- /Review Item -->

                    <!-- Review Item -->
                    <div class="bg-white p-4 rounded-xl flex gap-6 items-center  shadow-xs">
                        <div class="w-1/4 flex flex-col items-center">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51FrXXE3j7L._AC_UL210_SR210,210_.jpg"
                                 alt="image book clean code"
                                 class="w-4/5">
                            <p class="text-gray-600 text-sm text-center mt-2">Introduction to the Theory of Computation</p>
                        </div>
                        <div class="flex flex-col gap-2 w-3/4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-base text-gray-900">Fascinante viaje a la teoría de la computación</p>
                            <p class="text-base text-gray-500">Este libro ofrece una introducción completa y accesible a la
                                teoría de la computación. Aunque algunos conceptos son desafiantes, el autor logra
                                explicarlos de manera clara y ejemplificarlos con casos interesantes. Es un libro que
                                expande la mente y proporciona una base sólida en teoría computacional.</p>
                            <p class="text-sm text-gray-400">Martín Hernández - 10/04/2023</p>
                        </div>
                    </div>
                    <!-- /Review Item -->

                </div>
                <!-- /Review Grid -->
            </div>
            <!-- Reviews section -->

            <!-- Books section -->
            <div class="my-20" id="books">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900 leading-none">
                    Libros
                </h2>

                <!-- Books Grid -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/41SH-SvWPxL._SX342_SY445_QL70_ML2_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Clean Code</h2>
                                    <p class="text-sm text-gray-500">por Robert C. Martin</p>
                                </div>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Buenas
                                            prácticas</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,5 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">400 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://images.cdn2.buscalibre.com/fit-in/360x360/03/1a/031af9d7e401bb2d08911c317ecbedad.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">The Pragmatic
                                        Programmer</h2>
                                    <p class="text-sm text-gray-500">por Andrew Hunt y David Thomas</p>
                                </div>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Productividad
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,3 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">300 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/7169VZEOYFL._AC_UF1000,1000_QL80_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">
                                        Design Patterns: Elements of Reusable Object-Oriented Software</h2>
                                    <p class="text-sm text-gray-500">por Erich Gamma, Richard Helm, Ralph Johnson, John
                                        Vlissides</p>
                                </div>
                                <div class="flex flex-wrap gap-1 mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Diseño de
                                            software</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Patrones
                                            de diseño</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">340 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://images-na.ssl-images-amazon.com/images/I/51FrXXE3j7L._AC_UL210_SR210,210_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Introduction to the
                                        Theory of Computation</h2>
                                    <p class="text-sm text-gray-500">por Michael Sipser</p>
                                </div>
                                <div class="flex flex-wrap gap-1 mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Teoría de
                                            la computación</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Algoritmos</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,2 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">200 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/411ejyE8obL._AC_UF1000,1000_QL80_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">The C Programming
                                        Language</h2>
                                    <p class="text-sm text-gray-500">por Brian W. Kernighan y Dennis M. Ritchie</p>
                                </div>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">C</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,5 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">400 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/71sL0Qpd+YL.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Python Crash
                                        Course</h2>
                                    <p class="text-sm text-gray-500">por Eric Matthes</p>
                                </div>
                                <div class="flex mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div class="pl-2">
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Python</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,1 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">200 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/41-sN-mzwKL._AC_UF1000,1000_QL80_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Clean Architecture: A
                                        Craftsman's Guide to Software Structure and Design</h2>
                                    <p class="text-sm text-gray-500">por Robert C. Martin</p>
                                </div>
                                <div class="flex flex-wrap gap-1 mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Arquitectura de Software</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Diseño de
                                            Software</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,5 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">400 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                    <!-- Books Item -->
                    <a href="#" class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">
                        <div>
                            <img alt="person capturing an image"
                                 src="https://m.media-amazon.com/images/I/61aFldsgAmL._AC_UF1000,1000_QL80_.jpg"
                                 tabindex="0"
                                 class="focus:outline-none w-full h-44 object-contain py-4"/>
                        </div>
                        <div>
                            <div class="p-4">
                                <div>
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Domain-Driven Design:
                                        Tackling Complexity in the Heart of Software</h2>
                                    <p class="text-sm text-gray-500">por Eric Evans</p>
                                </div>
                                <div class="flex flex-wrap gap-1 mt-4">
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Programación</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Domain
                                            Driven Design (DDD)</p>
                                    </div>
                                    <div>
                                        <p tabindex="0"
                                           class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                            Arquitectura de Software</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-4 gap-2">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="text-gray-500 text-xs">4,5 estrellas</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                             version="1.1" id="Layer_1" viewBox="0 0 460 460" xml:space="preserve">
<g>
    <path style="fill:#FF7F4F;"
          d="M230.333,0C103.308,0,0,102.974,0,230c0,98.785,62.479,183.024,150.004,215.598l297.381-291.024   C416.25,64.595,330.94,0,230.333,0z"/>
    <path style="fill:#FF5419;"
          d="M460,230c0-26.416-4.467-51.784-12.663-75.41l-44.274-44.274l-345.46,201.7l50.785,50.785   l-10.785,30.515l52.366,52.367C174.895,454.935,202.187,460,230.332,460C357.358,460,460,357.026,460,230z"/>
    <polygon style="fill:#71E2F0;"
             points="403.063,110.317 403.063,312.017 230.332,312.017 200.003,211.167 230.332,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="230.332,110.317 230.332,312.017 178.893,312.017 97.603,393.317 97.603,312.017    57.603,312.017 57.603,110.317  "/>
    <polygon style="fill:#C2FBFF;"
             points="383.063,130.317 383.063,292.017 230.332,292.017 210.333,211.167 230.332,130.317  "/>
    <rect x="77.603" y="130.317" style="fill:#FFFFFF;" width="152.729" height="161.7"/>
    <polygon style="fill:#E0A300;"
             points="362.823,202.002 343.073,222.122 347.223,250.002 321.993,237.432 311.993,214.882    321.993,172.332 335.023,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="321.993,172.332 321.993,237.432 296.753,250.002 300.913,222.122 281.163,202.002    308.963,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="271.162,202.002 251.412,222.122 255.562,250.002 230.332,237.432 220.332,214.882    230.332,172.332 243.362,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="230.332,172.332 230.332,237.432 205.092,250.002 209.252,222.122 189.502,202.002    217.302,197.332  "/>
    <polygon style="fill:#E0A300;"
             points="179.503,202.002 159.753,222.122 163.903,250.002 138.673,237.432 128.673,214.882    138.673,172.332 151.703,197.332  "/>
    <polygon style="fill:#FFC61B;"
             points="138.673,172.332 138.673,237.432 113.433,250.002 117.593,222.122 97.843,202.002    125.643,197.332  "/>
</g>
</svg>
                                        <span class="text-gray-500 text-xs ml-1">400 reseñas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /Books Item -->

                </div>
                <!-- /Books Grid -->

            </div>

            <!-- Footer -->
            <footer class="p-4 rounded-lg shadow md:px-6 md:py-8 bg-gray-800">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="#" target="_blank" class="flex items-center mb-4 sm:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mr-2" viewBox="0 0 1024 1024"
                             version="1.1">
                            <path d="M1000.2 341.9L548.5 614.2 70.4 502.8l478.1-259.9z" fill="#9ED5E4"/>
                            <path
                                d="M548.5 628.4c-1.1 0-2.2-0.1-3.2-0.4l-478-111.4c-5.8-1.3-10.1-6.1-10.9-12-0.8-5.9 2.1-11.6 7.3-14.5l478-259.9c3-1.6 6.5-2.1 9.9-1.4l451.7 99c5.7 1.3 10.1 5.9 11 11.6 1 5.8-1.7 11.5-6.7 14.5L555.8 626.4c-2.2 1.3-4.8 2-7.3 2z m-438.3-131L546 598.9l416.1-250.8L550.6 258 110.2 497.4z"
                                fill="#154B8B"/>
                            <path
                                d="M548.5 806L92.1 694.6c-43.4-5.4-71.7-71.2-69.5-120.7 1.3-29.8 17.8-71.2 69.5-71.2l456.3 111.4V806h0.1z"
                                fill="#9ED5E4"/>
                            <path
                                d="M548.5 820.3c-1.1 0-2.3-0.1-3.4-0.4L89.5 708.6c-24.4-3.4-46.3-21.6-61.9-51.2-13.3-25.3-20.5-56.7-19.3-84.1 0.5-12 3.7-35 18.8-54.8 10.5-13.7 30.2-30 65-30 1.1 0 2.3 0.1 3.4 0.4l456.3 111.4c6.4 1.6 10.9 7.3 10.9 13.9V806c0 4.4-2 8.5-5.5 11.2-2.5 2-5.6 3.1-8.7 3.1z m-458-303.2c-13.9 0.4-51.4 6.3-53.6 57.5-1 22.6 5 48.6 16 69.6 15.2 29 32.2 35.2 41 36.3 0.5 0.1 1.1 0.2 1.6 0.3l438.7 107.1V625.4L90.5 517.1z"
                                fill="#154B8B"/>
                            <path d="M1000.2 533.7L548.5 806V614.2l451.7-272.3z" fill="#9ED5E4"/>
                            <path
                                d="M548.5 820.3c-2.4 0-4.8-0.6-7-1.8-4.5-2.5-7.3-7.3-7.3-12.4V614.2c0-5 2.6-9.6 6.9-12.2l451.7-272.3c4.4-2.7 9.9-2.7 14.4-0.2s7.3 7.3 7.3 12.4v191.8c0 5-2.6 9.6-6.9 12.2L555.8 818.2c-2.2 1.4-4.8 2.1-7.3 2.1z m14.2-198.1v158.5l423.2-255.1V367.2l-423.2 255z"
                                fill="#154B8B"/>
                            <path d="M825.4 343.8L759.6 379l-243.7-49.8 70.7-35.3z" fill="#F7F8F9"/>
                            <path
                                d="M759.6 387c-0.5 0-1.1-0.1-1.6-0.2L514.3 337c-3.3-0.7-5.9-3.4-6.3-6.8s1.3-6.7 4.4-8.2l70.7-35.3c1.6-0.8 3.4-1 5.2-0.7L827 336c3.3 0.7 5.8 3.4 6.3 6.7 0.5 3.3-1.2 6.6-4.1 8.2l-65.8 35.2c-1.2 0.6-2.5 0.9-3.8 0.9z m-219.4-61l218.2 44.6 43.8-23.5-214.5-44.8-47.5 23.7z"
                                fill="#154B8B"/>
                        </svg>
                        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Larabooks</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
                        <li>
                            <a href="/"
                               class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 text-gray-400">Inicio</a>
                        </li>
                        <li>
                            <a href="/books"
                               class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 text-gray-400">Libros</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8"/>
                <span class="block text-sm sm:text-center text-gray-400">© 2023 <a
                        href="https://flowbite.com" target="_blank" class="hover:underline">Larabooks™</a>. All Rights Reserved.
            </span>
            </footer>
            <!-- /Footer -->

        </div>
    </div>
</body>
</html>
