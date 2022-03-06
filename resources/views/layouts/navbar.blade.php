
    <nav class="border-gray-200 px-2 sm:px-4 py-2.5 bg-teal-900 sticky top-0 w-full z-50 text-white" >
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="{{route('home')}}" class="flex items-center">
                <span class="self-center text-xl font-semibold  whitespace-nowrap">{{ config('app.name', 'Glósa') }}</span>
            </a>
            <div class="flex md:order-2">
                @guest
                @if (Route::has('login'))
                <a class="px-6 py-2 mr-2 text-md font-medium text-center  bg-teal-600 rounded-lg cursor-pointer hover:bg-teal-700 focus:ring-teal-800" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                @endif
                @if (Route::has('register'))
                <a class="px-3 py-2 mr-3 text-md font-medium text-center  rounded-lg cursor-pointer md:mr-0 hover:text-gray-300" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
                @endif
                @else
                <!-- User Icon -->
                <a href="{{route('dashboard')}}" class=" mr-4 pt-1 hover:text-gray-200">Dashboard</a>
                <button type="button"
                    class="flex mr-3 text-sm bg-green-800 rounded-full md:mr-0 focus:ring-4 focus:ring-green-300 "
                    id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('img/profile.svg') }}" alt="user photo">
                </button>
                <div class="hidden my-4 text-base list-none  divide-y  rounded shadow bg-teal-700 divide-teal-600"
                    id="dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm">{{ Auth::user()->name }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-teal-600 0 hover:text-white">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm hover:bg-teal-600  hover:text-white"> 
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </nav>
