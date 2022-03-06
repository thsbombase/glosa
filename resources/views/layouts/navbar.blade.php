
    <nav class="border-gray-200 px-2 sm:px-4 py-2.5 bg-teal-900 sticky top-0 w-full z-50">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="{{route('home')}}" class="flex items-center">
                <span class="self-center text-xl font-semibold text-white whitespace-nowrap">{{ config('app.name', 'Glósa') }}</span>
            </a>
            <div class="flex md:order-2">
                @guest
                @if (Route::has('login'))
                <a class="px-3 py-2 mr-2 text-xs font-medium text-center text-white bg-blue-600 rounded-lg cursor-pointer hover:bg-blue-700 focus:ring-blue-800" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                @endif
                @if (Route::has('register'))
                <a class="px-3 py-2 mr-3 text-xs font-medium text-center text-white rounded-lg cursor-pointer md:mr-0 hover:text-gray-300" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
                @endif
                @else
                <!-- User Icon -->
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('img/profile.svg') }}" alt="user photo">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"> 
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
