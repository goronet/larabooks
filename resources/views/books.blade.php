<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larabooks - Libros</title>

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

            <!-- Hero -->
            <div class="relative isolate overflow-hidden bg-gray-900 my-10 rounded-xl">
                <img alt=""
                     class="absolute inset-0 -z-10 h-full w-full object-cover mix-blend-overlay"
                     src="https://images.unsplash.com/photo-1533669955142-6a73332af4db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2174&q=80">
                <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
                    <svg
                        class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                        viewBox="0 0 1155 678">
                        <path
                            d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"
                            fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".2"></path>
                        <defs>
                            <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" gradientUnits="userSpaceOnUse"
                                            x1="1155.49" x2="-78.208" y1=".177" y2="474.645">
                                <stop stop-color="#9089FC"></stop>
                                <stop offset="1" stop-color="#FF80B5"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl py-8 sm:py-20 text-white">
                        <h1 class="text-4xl md:text-6xl leading-none">Explora la biblioteca</h1>
                        <h2 class="mt-6 text-xl font-light">Explora nuestra amplia selección y descubre conocimientos
                            valioso</h2>
                        <form action="#" method="GET">
                            <label for="default-search"
                                   class="mb-2 text-sm font-medium sr-only text-gray-300">Buscar</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                       class="mt-8 block p-4 pl-10 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                                       placeholder="Ingresar el nombre del libro o los autores" required>
                                <button type="submit"
                                        class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 hover:to-blue-700 transition duration-200 ease-in-out font-medium rounded-lg text-sm px-4 py-2">
                                    Buscar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div
                        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                        <svg
                            class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                            viewBox="0 0 1155 678">
                            <path
                                d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z"
                                fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".2"></path>
                            <defs>
                                <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" gradientUnits="userSpaceOnUse"
                                                x1="1155.49" x2="-78.208" y1=".177" y2="474.645">
                                    <stop stop-color="#9089FC"></stop>
                                    <stop offset="1" stop-color="#FF80B5"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- /Hero -->

            <!-- Books Section -->
            <div class="my-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach($books as $book)
                    <!-- Books Item -->
                    <x-book-card :$book/>
                    <!-- /Books Item -->
                @endforeach
            </div>
            <!-- /Books Section -->

            <!-- Pagination Section -->
            <div class="my-2">
                {{ $books->links() }}
            </div>
            <!-- /Pagination Section -->

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
