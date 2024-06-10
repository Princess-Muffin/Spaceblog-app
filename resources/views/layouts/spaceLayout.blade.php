<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('Favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('Favicons/safari-pinned-tab.svg') }}" color="#334155">
        <meta name="apple-mobile-web-app-title" content="S P A C E">
        <meta name="application-name" content="S P A C E">
        <meta name="msapplication-TileColor" content="#334155">
        <meta name="theme-color" content="#334155">



        <title>S P A C E</title>

        <!-- Styles ------------>
        @vite (['resources/css/app.css' , 'resources/js/app.js'])

       

    </head>

    <body class="p-0 bg-slate-700">

        <!-- GRID CONTAINER BEGINS------------------------------------------------------------------------------------------------------------------------>
            <div id="layout" class="grid min-h-screen grid-cols-4 gap-10 grid-rows-Alayout justify-evenly">

                <!-- GRID ITEM 1 ----------------------------------------------------------------------------------------------------------------------->
                    
                    <!-- NAVIGATION BAR ------------------------------------------------------------------------------------------------------------>
                        <header  class="col-span-4 ">
                            @include('components.header')    
                        </header>


                <!-- GRID ITEM 2 ----------------------------------------------------------------------------------------------------------------------->
                    
                    <!-- APP NAVIGATION BAR -------------------------------------------------------------------------------------------->
                        @include('components.appNavigation')    
                

                <!-- GRID ITEM 3 ----------------------------------------------------------------------------------------------------------------------->
                    
                    <!-- PAGE HEADING ------------------------------------------------------------------------------------------------------------------>
                        <h1 class="py-12 pb-0 col-span-4 text-white text-2xl text-center tracking-wide font-bold laptop:text-4xl desktop:text-5xl desktop:-tracking-tighter whitespace-normal break-at-nbsp">
                            @isset($header)
                                {!! $header !!}
                            @endisset                           
                        </h1>
                        

                <!-- GRID ITEM 4 ----------------------------------------------------------------------------------------------------------------------->

                    <!-- PAGE CONTENT ------------------------------------------------------------------------------------------------------------------>
                        <main class="col-span-4 tablet:col-start-2 tablet:col-span-2 ">
                            @yield('content')
                        </main>
                        

                <!-- GRID ITEM 5 ----------------------------------------------------------------------------------------------------------------------------->

                    <!-- PAGE FOOTER --------------------------------------------------------------------------------------------------------------------->
                        <footer class="col-span-4">
                            @include('components.footer')
                        </footer>
                    </div>
            
        <!-- GRID CONTAINER ENDS------------------------------------------------------------------------------------------------------------------------>
    </body>
</html>
