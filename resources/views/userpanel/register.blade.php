@extends('userpanel.s1')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('rd/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('rd/css/style.css')}}">

</head>
<body>
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Register</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
            
                <div class="signup-content">
                    <div class="signup-form">
                    
                        <h2 class="form-title">Sign up</h2>
                        <form action="{{url('insertdata')}}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                            <lable class="form-lable">Full Name</lable>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Your Name" />
                                <h6 style="color:red">@error('name'){{$message}}@enderror</h6>
                            </div>
                            
                            <div class="form-group">
                            <lable class="form-lable">Address</lable>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}" id="add" placeholder="Address" />
                                <h6 style="color:red">@error('address'){{$message}}@enderror</h6>
                            </div>
                            
                            <div class="form-group">
                            <lable class="form-lable">City</lable>
                                <input type="text" name="city" class="form-control" id="city" value="{{old('city')}}" placeholder="City" />
                                <h6 style="color:red">@error('city'){{$message}}@enderror</h6>
                            </div>
                            
                            <div class="form-group">
                            <lable class="form-lable">Mobile No.</lable>
                                <input type="number" name="mobile" class="form-control" id="mobile" value="{{old('mobile')}}" placeholder="Mobile Number" />
                                <h6 style="color:red">@error('mobile'){{$message}}@enderror</h6>
                            </div>
                           
                            <div class="form-group">
                            <lable class="form-lable">Date of Birth</lable>
                                <input type="date" name="dob" class="form-control" id="dob" value="{{old('dob')}}" placeholder="DOB" />
                                <h6 style="color:red">@error('dob'){{$message}}@enderror</h6>
                            </div>
                            
                            <div class="form-group">
                            <lable class="form-lable">Email Id</lable>
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Your Email" />
                                @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                            @endif
                            <h6 style="color:red">@error('email'){{$message}}@enderror</h6>
                            </div>
                           
                            
                            
                            <div class="form-group">
                            <lable class="form-lable">Password</lable>
                                <input type="password" name="pass"  class="form-control form-control-lg @error('pass') is-invalid @enderror" id="pass" placeholder="Password" />
                                <h6 style="color:red">@error('pass'){{$message}}@enderror</h6>
                            </div>
                            
                            <div class="form-group">
                            <lable class="form-lable">Confirm Password</lable>
                                <input type="password" name="pass_confirmation"  class="form-control form-control-lg @error('pass_confirmation') is-invalid @enderror" placeholder="confirm Password" />
                                <h6 style="color:red">@error('pass'){{$message}}@enderror</h6>
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