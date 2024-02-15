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
            @include('layouts.nav')
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
                <img src="https://res.cloudinary.com/dy09hqrno/image/upload/v1691588230/hero_wtour7.png"
                     alt="hero image"
                     class="md:w-1/2 rounded-xl mb-10 shadow-md">
            </div>
            <!-- /hero section -->

            <!-- Featured section -->
            <div class="my-20" id="featured">
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900 leading-none">
                    Destacados
                </h2>

                <!-- Featured Grid -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                    @foreach($featuredBooks as $book)
                        <!-- Featured Item -->
                        <x-book-card :$book show-description/>
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
                    @foreach($reviews as $review)
                        <!-- Review Item -->
                        <div class="bg-white p-4 rounded-xl flex gap-6 items-center shadow-xs">
                            <div class="w-1/4 flex flex-col items-center">
                                <img src="https://m.media-amazon.com/images/I/41SH-SvWPxL._SX342_SY445_QL70_ML2_.jpg"
                                     alt="image book clean code"
                                     class="w-4/5">
                                <p class="text-gray-600 text-sm text-center mt-2">{{ $review->book->name }}</p>
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
                                <p class="text-base text-gray-900">{{ $review->title }}</p>
                                <p class="text-base text-gray-500">{{ $review->description }}</p>
                                <p class="text-sm text-gray-400">{{ $review->user->name }}
                                    - {{ $review->created_at?->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        <!-- /Review Item -->
                    @endforeach
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
                    @foreach($books as $book)
                        <!-- Books Item -->
                        <x-book-card :$book/>
                        <!-- /Books Item -->
                    @endforeach
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
