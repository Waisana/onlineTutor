@extends('auth.authApp')
@section('welcome')
<div class="container main-face">
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
                <form  method="POST" class="mb-2" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group ">
                        <h3 class="mb-2 font-weight=bold">{{ __('Login') }}</h3>
                        <input id="email" type="email" class="input-block-level form-control input-lg mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password" class="input-block-level form-control input-lg mb-2 @error('password') is-invalid @enderror"  name="password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button name="login" class="btn btn-md " type="submit">{{ __('Login') }}</button> 
                    </div>
                </form>	
            </div>
            <div class="form-singUp">
                New to Godka E-learning system
                <hr class="bg-white">
                <h3 class="mb-2 font-weight=bold">Sign up</h3>
                <div class="signup-buttons">
                    <a href="{{route('studentsRegister')}}"  name="login" class="btn  btn-md " type="submit">I`m a Student</a>
                    <a href="{{route('teachersRegister')}}"   name="login" class="btn btn-md " type="submit">I`m a Teacher</a>
                </div>
            </div>
        </div>
        <footer >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <p class="simplenav">
                                    <a href="login.php">I`m a Student</a> | 
                                    <a href="login.php">I`m a Teacher</a> |
                                    <a href="contact.php">www.godkatechnologies.com</a>
                                </p>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <p class="text-right">
                                    &copy; 2020 onlinetutor  
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection