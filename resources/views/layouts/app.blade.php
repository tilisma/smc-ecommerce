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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">
            <div class="flex">
                <div class="w-56 bg-gray-200 shadow-lg h-screen">
                    <img src="https://smc.edu.np/wp-content/uploads/2023/11/smc-logo-circle.png" class="w-8/12 mx-auto mt-5" alt="">

                <div class ="mt-5">
                <a  href="{{route('dashboard')}}" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Dashboard</a>

                <a href="{{route('category.index')}}" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Category</a>

                <a href="" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Products</a>

                <a href="" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Users</a>

                <a href="" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Orders</a>

                <a href="" class="block px-2 py-3 text-lg font-bold border-l-4 border-transparent m-2 transition-border duration-300 ease-in-out hover:border-blue-600 hover:bg-gray-300">Logout</a>
            </div>
                </div>

                <div class="p-4 flex-1">
                    @yield('content')

                </div>
            </div>
            
    </body>
</html>
