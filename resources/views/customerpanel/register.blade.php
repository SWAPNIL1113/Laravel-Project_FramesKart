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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
            
                <div class="signup-content">
                    <div class="signup-form">
                    <h3>Sign Up</h3>
                        <h2 class="form-title">Sign up</h2>
                        <form action="{{url('insertdata')}}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                               
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" id="add" placeholder="Address"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" id="city" placeholder="City"/>
                            </div>
                        
                            <div class="form-group">
                                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number"/>
                            </div>
                            <div class="form-group">
                                
                                <input type="date" name="dob" class="form-control" id="dob" placeholder="DOB"/>
                            </div>
                            <div class="form-group">
                               
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password"/>
                            </div>
                        
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="rd/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
  

    </div>

    <!-- JS -->
    <script src="rd/vendor/jquery/jquery.min.js"></script>
    <script src="rd/js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>
    
    @endsection