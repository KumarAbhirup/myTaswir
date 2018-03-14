<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      {{config('app.name')}}
    </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Semantic UI -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic/dist/semantic.css') }}">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="{{ asset('css/semantic/dist/semantic.js') }}"></script>
</head>
