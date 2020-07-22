@extends('auth.authApp')
@section('welcome')
    <div class="row justify-content-center">
        <div class="col-md-7 studentR">
            <div class="card">
                <div class="card-header"> Teacher Registeration</div>
                <div class="card-body">
                    <form class="form-horizontal" id="teacher-register" method="POST" action="{{ route('register') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Second Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input id="secondname" type="text" class="form-control @error('secondname') is-invalid @enderror" name="secondname" value="{{ old('secondname') }}" required autocomplete="secondname">
                                    @error('secondname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="cols-sm-2 control-label">Gender</label>
                            <div class="cols-sm-10">
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" value="{{ old('gender') }}">
                                    <option selected value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="cols-sm-2 control-label">Profile Image</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_contact" class="cols-sm-2 control-label">contact</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control @error('phone_contact') is-invalid @enderror" name="phone_contact" id="phone_contact" placeholder="07......" />
                                    @error('phone_contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">{{ __('Password') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">{{ __('Confirm Password') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <input id="user_type" name="user_type" value="teacher" style="display: none"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg w-50 login-button teacher-btn">Register</button>
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