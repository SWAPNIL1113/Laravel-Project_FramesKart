<?php

use App\Http\Controllers\CustomerPanelController;
$total= CustomerPanelController::cartitem();

?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      
      <link rel="shortcut icon" href="{{asset ('cp/images/favicon.png')}}" type="">
      <title>FramesKart</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset ('cp/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset ('cp/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset ('cp/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset ('cp/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand"><img width="270" height="40px" src="{{asset('cp/images/logo3.png')}}"  /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="/customerindex">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/profileview">Profile</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/products">Products</a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Categories <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                           @foreach($data as $row) 
                              <li><a href="/viewdetail/{{$row->id}}">{{$row->product_name}}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/myorders">My Order</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/cart"><img width="25px" height="25px" src="{{asset('cp/images/cart.png')}}"  />({{$total}})</span></i></a>
                        </li>
                   
                        <li class="nav-item">
                           <a class="nav-link" href="/contactus">inquiry</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="/user_logout">  
                              <button type="button" class="btn btn-warning">
                              Log out
                              </button></a>                       
                           
                        </li>
                  
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>



         @yield('content')



<footer >
<div class="container-fluid">

</div>
</footer>

      <!-- footer end -->
      
      <!-- jQery -->
      <script src="{{ asset('cp/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{ asset('cp/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('cp/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('cp/js/custom.js')}}"></script>
   </body>
</html>