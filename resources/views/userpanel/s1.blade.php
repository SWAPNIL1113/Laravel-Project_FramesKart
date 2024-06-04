
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
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" height="40px" src="{{asset('cp/images/logo3.png')}}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="/index">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/user_products">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Categories <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                           @foreach($data as $row) 
                              <li><a href="/category/{{$row->id}}">{{$row->product_name}}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/inquiry">inquiry</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/register">Sign Up</a>
                        </li>
                
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>



         @yield('content')



      <!-- footer end -->
      <div class="cpy_">
        
      </div>
      <!-- jQery -->
      <script src="{{ asset('cp/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{ asset('cp/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('cp/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('cp/js/custom.js')}}"></script>


</script>


   </body>
</html>