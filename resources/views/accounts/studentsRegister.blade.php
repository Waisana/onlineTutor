<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}"> 
    <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <title>Student Register</title>
</head>
<body>


    <div class="row justify-content-center">
        <div class="col-md-8 studentR">
            <div class="card">
                <div class="card-header"> Student Register</div>
                <div class="card-body">

                    <form class="form-horizontal" method="post" action="#">

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Second Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Second Name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="cols-sm-2 control-label">Gender</label>
                            <div class="cols-sm-10">
                                <select class="form-control">
                                    <option selected="">Male</option>
                                    <option>Female</option>
                                
                                </select>
                            </div>
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Parent Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Parent Email Email" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_contact" class="cols-sm-2 control-label">Parent phone contact</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="phone_contact" id="phone_contact" placeholder="Enter phone contact " />
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group ">
                            <button type="button" class="btn btn-primary btn-lg w-50 login-button ">Register</button>
                        </div>
                        <div class="login-register">
                            <a href="index.php">Login</a>
                        </div>
                    </form>
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