@extends('auth.authApp')
@section('welcome')
    <div class="row justify-content-center">
        <div class="col-md-7 studentR">
            <div class="card">
                <div class="card-header"> Teacher Registeration</div>
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
                        </div>
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
                            <a href="{{route('welcome')}}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection