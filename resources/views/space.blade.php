<!-- EXTENDS MASTER LAYOUT AND USES DYNAMIC PAGE HEADING ------------------------------------------------------------------------------------------------>
@extends('layouts.spaceLayout', ['header' => 'S P A C E '])

<!-- PAGE CONTENT --------------------------------------------------------------------------------------------------------------------------------------->
@section('content')

    <main>
        @include('components.head.tinymce-config')
        @yield('capturePost')
    </main>

    <h2 class="py-12 pb-0 text-white text-1xl text-center tracking-wide font-bold laptop:text-4xl desktop:text-5xl desktop:-tracking-tighter whitespace-normal">
        W H A T ' S &nbsp; I N &nbsp; S P A C E &nbsp; ? 
    </h2>
    </br>
    
    <main>
        @yield('displayPost')
    </main>

@endsection