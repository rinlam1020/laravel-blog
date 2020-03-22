<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <!-- <title>{{ config('app.name', 'My Store') }}</title> -->
    <title>{{ 'My StoreX' }}</title>
    <!-- Styles -->
    
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ '/css/fontawesome.css' }}" rel="stylesheet">
    <link href="{{ '/css/templatemo-sixteen.css' }}" rel="stylesheet">
    <link href="{{ '/css/owl.css' }}" rel="stylesheet">
    <link href="{{ '/css/app_modifier.css' }}" rel="stylesheet">
    <link href="{{ '/css/templatemo-sixteen_modifier.css' }}" rel="stylesheet">
    <link href="{{ '/css/dia-footer-templatemo.css' }}" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="debugx">
        <?php 
            //var_dump($__env);
        ?>
    </div>
    <div id="app">
        @include('shared/navbar')

        <div class="clear">
            @include('shared/alerts')

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('shared/footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ '/js/custom.js' }}"></script>
    <script src="{{ '/js/owl.js' }}"></script>
    <script src="{{ '/js/slick.js' }}"></script>
    <script src="{{ '/js/isotope.js' }}"></script>
    <script src="{{ '/js/accordions.js' }}"></script>
    @stack('inline-scripts')
</body>
</html>
