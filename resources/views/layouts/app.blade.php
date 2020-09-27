<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- tailwindcss -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="cointainer mx-auto">
                <h5><img style="height:60px; width:60px:" src="https://www.transparentpng.com/thumb/twitter/white-twitter-icon-png-11.png" alt="white twitter icon png @transparentpng.com"></h5>
                <h1 class="font-bold">twitter</h1>
            </header>
        </section>
        <section class="px-8">
            <main class="mx-auto">

                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-1/6">
                        @include ('_sidebar-links')
                    </div>
                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                        @yield('content')
                    </div>
                    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                        @include ('_friends-lists')
                    </div>
                </div>

            </main>
        </section>
    </div>
</body>
</html>
