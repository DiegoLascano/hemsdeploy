<header>
    <div class="container flex justify-between p-3">
        <a class="font-semibold text-cyan-900 bg-cyan-200 border-cyan-500 rounded-full no-underline uppercase px-4 py-1" href="{{ url('/dashboard') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <div class="flex">
            @guest
            <div>
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            <div>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
            @else
                <div>
                    <a class="nav-link" href="#">
                        {{ Auth::user()->name }}
                    </a>
                </div>
                <div>
                    <a class="text-grey-900 no-underline hover:underline hover:text-grey lowercase" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
        {{-- </ul> --}}
        {{-- <a href="#" class="text-grey no-underline hover:text-white uppercase text-sm">Sign in</a> --}}
    </div>
    <div class="container mx-auto p-3">
        <p class="header-title text-white text-2xl text-center uppercase">Home Energy Management System</p>
    </div>
    <nav class="container flex justify-center p-3">
        <a href="/dashboard" class="nav-link mx-3 active:bg-red">Dashboard</a>
        <a href="#" class="nav-link mx-3">Queries</a>
        <a href="/graphs" class="nav-link mx-3">Graphs</a>
    </nav>
    {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}
</header>