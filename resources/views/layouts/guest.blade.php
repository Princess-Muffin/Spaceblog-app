<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>S P A C E</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>


    <body class="font-sans text-gray-900 antialiased">

        
        <main>
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-20 sm:pt-0 bg-slate-700">
                
                <div>
                    <a href="/">
                        <x-application-logo  />
                    </a>
                </div>

                <div class=" mt-9 px-20 py-16 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                    {{ $slot }}
                </div>

            </div>
        </main>
        <footer>
            <!-- PAGE FOOTER ------------------------------------------------------------------------------------------------------------------------->
            @include('components.footer') 
        </footer>

    </body>

</html>
