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
    <div class="container">
    <div class="row">
        <div class="col-md-7">
                <div class="navbar-brand ">
                    <img class="logo" src="{{asset('images/logo.png')}}">
                </div>
                <div class="title">
                    <p class="chmsc">Bosco Waisana online lerming site </p> 
                    <h3><p> Experience Electronic/E Learning</p></h3>     
                </div>
                <div>
                    <p>EXPECTATION:</p>
                    <p>Excellence, Competence and Educational</p>
                    <p>Leadership in Engineering and Technology</p>
                </div>
        </div>
        <div class="col-md-4">
            <form  action="" method="post">
                <div class="form-group ">
                    <h3 class="form-signin-heading "><i class="icon-lock"></i> Sign in</h3>
                    <input type="text" class="input-block-level form-control input-lg input-forme " id="username" name="username" placeholder="Username" required="required">
                    <input type="password" class="input-block-level form-control input-lg input-forme" id="password" name="password" placeholder="Password" required="required">
                    <button  id="signin" name="login" class="btn btn-warning btn-lg " type="submit"> Sign in</button> 
                </div>
            </form>	
            <div id="button_form"  >
                New to Bosco Waisana E-Lerning site
                <hr>
                <h3 class="form-signin-heading mb-2"><i class="icon-edit"></i> Sign up</h3>
                <div class="pull-right">
                    <button  id="signin_student" name="login" class="btn btn-warning btn-lg " type="submit">I`m a Student</button>
                    <button  id="signin_teacher" name="login" class="btn btn-warning btn-lg " type="submit">I`m a Teacher</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('scripts/common.js')}}" type="text/javascript"></script>
</body>
</html>