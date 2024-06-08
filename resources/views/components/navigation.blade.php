<!-- NAVIGATION BAR ------------------------------------------------------------------------------------------------------------>

@if (Route::has('login'))
    <nav class="col-span-4 p-4 bg-purple-300 flex flex-wrap items-center justify-between">
        <!-- LOGO ------------------------------------------------------------------------------------------------------>
        <div id="logo" class="flex-shrink-0 ml-5">
            <a href="/dashboard">
                <x-application-logo  />
            </a>
        </div>

        <!-- NAV LINKS ------------------------------------------------------------------------------------------------->
        <div id="navbarLinks" class="flex-grow flex justify-end space-x-8 text-white font-medium mr-5">
            @auth
                <a  >
                    @include('layouts.navigation')
                </a>
            @else
                <a href="{{ route('login') }}" class="hover:text-black hover:underline">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:text-black hover:underline">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </nav>
@endif
