@extends('auth.authApp')
@section('welcome')
<div class="container">
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
@endsection