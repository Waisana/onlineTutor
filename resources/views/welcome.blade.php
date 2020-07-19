{{-- @extends('accounts.studentsRegister') --}}
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
    <div class="container ">

        <div class="row ">
            
                <div class="col-md-8">
                    <div class="title-intro">
                        <h1 class="font-weight=bold"> Godka E-learning system </h1>
                        <h3>Experience Electronic/E Learning</h3>
                    </div>
                    <div class="expectation">
                        <h2>EXPECTATION:</h2>
                        <p>Excellence, Competence and Educational</p>
                        <p>Leadership in Engineering and Technology</p>
                    </div>
                  
                </div>
                
                <div class="col-md-4 mt-auto mb-2">
                    
                        <div class="form-signIn">
                            <form  action="" method="post" class="mb-2">
                                <div class="form-group ">
                                    <h3 class="mb-2 font-weight=bold"> Sign in</h3>
                                    <input type="text" class="input-block-level form-control input-lg mb-2" name="username" placeholder="Username">
                                    <input type="password" class="input-block-level form-control input-lg mb-2"  name="password" placeholder="Password" >
                                    <button name="login" class="btn btn-warning btn-md " type="submit"> Sign in</button> 
                                </div>
                            </form>	
                        </div>


                        <div class="form-singUp">
                            New to Godka E-learning system
                            <hr>
                            <h3 class="mb-2 font-weight=bold">Sign up</h3>
                            <div class="signup-buttons">
                                <a href="{{route('studentsRegister')}}"  name="login" class="btn btn-warning btn-md " type="submit">I`m a Student</a>
                                <a href="{{route('teachersRegister')}}"   name="login" class="btn btn-warning btn-md " type="submit">I`m a Teacher</a>
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