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
                     <h3>Log in</h3>
                  </div>
               </div>
            </div>
         </div>
      </section> 
    <div class="main">
<center>
@csrf
@if(session('status'))

<h3 style="color:green">{{session('status')}}</h3>

@endif
</center>
   
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{asset('rd/images/signin-image.jpg')}}" alt="sing up image"></figure>
                <a href="/register" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
              
                <h2 class="form-title">Login</h2>
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
                    <lable class="form-lable">Email id</lable>
                       
                        <input type="text" name="email" class="form-control" id="your_name" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                    <lable class="form-lable">Password</lable>
                   
                        <input type="password" class="form-control" name="pass" id="your_pass" placeholder="Password"/>
                    </div>
                  
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                
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

