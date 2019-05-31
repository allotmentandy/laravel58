<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
@mapstyles
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest h-screen antialiased">
    <div id="app">
        <nav class="bg-blue-darkest shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-white no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    
                        @guest
                        <div class="flex-1 text-right">
                            <a class="no-underline hover:underline text-grey-lightest text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="no-underline hover:underline text-grey-lightest text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                        @else
                        <div class="flex-1 text-right">
                            <div class="dropdown">
                                <button class="dropbtn">{{ Auth::user()->name }}</button>
                                <div class="dropdown-content text-left">
                                    <a href="#">Link 1</a>
                                    <a href="/map">Map</a>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div> 
                        </div>
                        @endguest
                    
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @mapscripts
</body>
</html>
