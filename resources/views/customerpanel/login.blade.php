@extends('userpanel.s1')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="rd/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="rd/css/style.css">
</head>
<body>

    <div class="main">
    
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="rd/images/signin-image.jpg" alt="sing up image"></figure>
                <a href="/register" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <div class="form-title"><h3>Login</h3></div>
                <form method="POST" action="/admin_check" class="register-form" id="login-form">
                @csrf
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
                @endif
                    <div class="form-group">
                        <select name="user" class="form-control" >
                        <option>---Select User---</option>
                            <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                    </select>
                    </div>
                    <div class="form-group">
                       
                        <input type="text" name="name" class="form-control" id="your_name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                   
                        <input type="password" class="form-control" name="pass" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-grou0.p">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="rd/vendor/jquery/jquery.min.js"></script>
<script src="rd/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection