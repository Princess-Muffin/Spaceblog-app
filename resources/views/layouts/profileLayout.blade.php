<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>S P A C E</title>

        <!-- Styles -->
        @vite (['resources/css/app.css' , 'resources/js/app.js'])
       

    </head>
    <body class="p-0 bg-slate-700">

        <!-- GRID CONTAINER BEGINS------------------------------------------------------------------------------------------------------------------------>
            <div id="layout" class="grid min-h-screen grid-cols-4 gap-10 grid-rows-Playout justify-evenly">

                <!-- GRID ITEM 1 ----------------------------------------------------------------------------------------------------------------------->
                    <header  class="col-span-4 ">
                            
                        <!-- NAVIGATION BAR ------------------------------------------------------------------------------------------------------------>
                        @include('components.header')   

                    </header>
                
                <!-- GRID ITEM 2 ----------------------------------------------------------------------------------------------------------------------->
                    <!-- PAGE HEADING ------------------------------------------------------------------------------------------------------------------>
                    <h1 class="p-12 pb-0 col-span-4 text-white text-2xl text-center tracking-wide font-bold laptop:text-4xl desktop:text-5xl desktop:-tracking-tighter whitespace-normal break-at-nbsp">
                        @isset($header)

                            {!! $header !!}

                        @endisset                           
                    </h1>
                        

                <!-- GRID ITEM 3 ----------------------------------------------------------------------------------------------------------------------->

                    <!-- PAGE CONTENT ------------------------------------------------------------------------------------------------------------------>
                        <main class="col-span-4 tablet:col-start-2 tablet:col-span-2 ">
                        
                            @yield('content')

                        </main>
                        

                <!-- GRID ITEM 4 ----------------------------------------------------------------------------------------------------------------------------->

                    <!-- PAGE FOOTER ------------------------------------------------------------------------------------------------------------------------->
                        @include('components.footer')          
            </div>
            
        <!-- GRID CONTAINER ENDS------------------------------------------------------------------------------------------------------------------------>
    </body>
</html>
