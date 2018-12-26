@extends('layout.auth.layout')
@section('content')
<div class="card card-container" style="max-width:500px">
    <h3 class="text-center">Sign Up</h3>
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" method="post" action="{{route('register')}}">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="text" name="fullname" class="form-control" placeholder="Fullname" required >
        <input type="date" name="birthdate" class="form-control" placeholder="Birthdate" required>
        <div class="row" style="margin:10px 0">
            <div class="col-md-4 col-md-offset-2">
                <input type="radio" name="gender" value="Nam" required> Male
            </div>
            <div class="col-md-4">
                    <input type="radio" name="gender" value="Nữ" required> Female
            </div>
        </div>
        <input type="email" name="email" class="form-control" placeholder="Email address" required >
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input type="password" name="confirmation_password" class="form-control" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign up</button>
    </form><!-- /form -->
    <a href="{{route('login')}}" class="forgot-password">
        Or Login
    </a>
</div><!-- /card-container -->
@endsection
@section('title','Sign Up')