<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(empty($page->title))
    <title>Allotment Andy Github.io</title>
    @else
        <title>{{$page->title}}</title>
    @endif

@mapstyles
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest h-screen antialiased">
    <div id="app">
        <div class="font-semibold font-mono bg-grey-lightest text-grey-darkest py-3 px-6 m-5 shadow-inner">
            <div class="md:w-3/4 md:mx-auto">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md p-10">
                    <h1 class="mb-6">Allotment Andy's Github.io pages</h1>
                    <span>
                        <a href="/">home</a> | 
                        <a href="/laravel">laravel</a> | 
                        <a href="tailwind">tailwind</a> | 
                        <a href="gardening">gardening</a> | 
                        <a href="london">london</a> | 
                    </span>
                </div>
            </div>
        </div>
        <div class="w-1/2 bg-grey-lightest text-grey-darkest py-3 px-6 m-5 md:mx-auto">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @mapscripts
</body>
</html>
