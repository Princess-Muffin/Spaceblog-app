{{-- Control the visibility of the responsive navigation menu + style the navigation bar with a purple background --}}
    <nav x-data="{ open: false, dropdownOpen: false }" class="bg-purple-300 border-b border-purple-300">

        <!-- User Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                
                <!-- Settings Dropdown -->
                <div class="flex items-center sm:ms-6">

                    <!-- Dropdown Menu -->
                    <x-dropdown align="right" width="65">

                        <x-slot name="trigger">
                            <button @click="dropdownOpen = ! dropdownOpen" class="inline-flex items-center px-3 py-2 border border-transparent text leading-4 font-medium rounded-md text-white hover:text-gray-700 focus:outline-none  ">
                                <div>{{ Auth::user()->name }}</div>
                                
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" @click.away="dropdownOpen = false" @keydown.escape.window="dropdownOpen = false" x-cloak class="py-1 bg-white rounded-md shadow-lg duration-75">
                                
                                <div class="block px-4 py-2 text-xs text-blue-900 bg-slate-300 ">
                                    {{ Auth::user()->name }}
                                    {{ Auth::user()->email }} 
                                </div>

                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                                    {{ __('Posts') }}
                                </x-dropdown-link>



                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>

        
    </nav>
