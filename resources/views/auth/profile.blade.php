@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        <div class="content">
            <div class="module-body">
                <div class="profile-head media">
                    <a href="#" class="media-avatar pull-left">
                        <img src="images/user.png" alt="user" height="50px" class="img-thumbnail">
                    </a>
                    <div class="media-body ml-4">
                        <h4 class="ml-2">
                            <strong>John Doga</strong>
                        </h4>
                        <div class="row">
                            <div class="col-md-4">
                                <dl>
                                    <dt class="mt-3">User Type</dt>
                                    <dd> Administrator</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl>
                                    <dt class="mt-3">User Type</dt>
                                    <dd> Administrator</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl>
                                    <dt class="mt-3">User Type</dt>
                                    <dd> Administrator</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module-body">
                <div class="profile-head media">
                    <div class="media-body ml-4">
                        <h4>
                            <strong>Make changes</strong>
                        </h4>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" placeholder="first name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Second Name</label>
                                        <input type="text" class="form-control" placeholder="second name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Profile picture</label>
                                        <input type="file" class="form-control" name="profile">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control form-control-sm" placeholder="***********">
                                    </div>
                                    <button type="submit" class="float-left btn btn-md btn-primary">Sve Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection