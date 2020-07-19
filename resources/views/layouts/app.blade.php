<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}"> 
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    @include('layouts.sidebar')
                    @include('layouts.modal')
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <script src="{{ asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/common.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
$(document).ready(function() {
  $('#months').multiselect();
});
    </script>
</body>
</html>
