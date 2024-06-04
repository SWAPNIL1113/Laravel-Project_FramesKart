<?php

use App\Http\Controllers\CustomerPanelController;
$total= CustomerPanelController::cartitem();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FramesKart Customer Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset ('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>FramesKart<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="/customerindex">Home</a></li>
          <li><a href="/profileview">Profile</a></li>
          <li><a href="/products">Products</a></li>
          <li class="dropdown"><a href="/"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            
          
          <ul>
          @foreach($data as $row) 
              <li><a href="/viewdetail/{{$row->id}}">{{$row->product_name}}</a></li>
              @endforeach
          </ul>   
         
          </li> 
          <li><a href="/cart" >Cart({{$total}})</a></li>
          <li><a href="/myorders" >My Orders</a></li>
          <li><a href="/user_logout" >Log Out</a></li>
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-li0.st"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <section id="hero" class="hero">
    <div>

  @yield('content')

    </div>


  

    </section>







<footer id="footer" class="footer">

<div >
</div>



</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset ('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset ('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset ('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset ('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset ('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset ('assets/js/main.js')}}"></script>

</body>

</html>






<section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome {{Session::get('CustomerLoginId')['name']}} </h2>
          <p>NEW ARRIVALS STARTING AT RS.1199
Buy 1 Get 1 Free with Free Upgrade to 2 Years Gold Membership at R̶s̶.̶1̶2̶0̶0̶ Rs.600</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/products" class="btn-get-started">Get Started</a>
            <a href="https://youtu.be/1WpldhTjbzg" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset ('assets/img/hero-img.svg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
        @foreach($data as $row) 
              
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="/viewdetail/{{$row->id}}" class="stretched-link">{{$row->product_name}}</a></h4>
            </div>
          </div>
          <!--End Icon Box -->
          @endforeach
      </div>
    </div>

    </div>
  </section>


//link

<head>
<style>

$color: #111
$primary: #FFAB9D

html, body
  height: 100%
  
body
  display: grid
  font-family: Avenir, sans-serif
  color: $color
  
a
  text-decoration: none
  color: inherit

.cta
  position: relative
  margin: auto
  padding: 19px 22px
  transition: all .2s ease
  &:before
    content: ""
    position: absolute
    top: 0
    left: 0
    display: block
    border-radius: 28px
    background: rgba($primary,.5)
    width: 56px
    height: 56px
    transition: all .3s ease
  span
    position: relative
    font-size: 16px
    line-height: 18px
    font-weight: 900
    letter-spacing: .25em
    text-transform: uppercase
    vertical-align: middle
  svg
    position: relative
    top: 0
    margin-left: 10px
    fill: none
    stroke-linecap: round
    stroke-linejoin: round
    stroke: $color
    stroke-width: 2
    transform: translateX(-5px)
    transition: all .3s ease
  &:hover
    &:before
      width: 100%
      background: rgba($primary,1)
    svg
      transform: translateX(0)
  &:active
    transform: scale(.96)
</style>
</head>


<a href="#" class="cta">
  <span>Click me</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>

//button

<button class="fill">Fill In</button>
  <button class="pulse">Pulse</button>
  <button class="close">Close</button>
  <button class="raise">Raise</button>
  <button class="up">Fill Up</button>
  <button class="slide">Slide</button>
  <button class="offset">Offset</button>


  @extends('customerpanel.customermaster')

@section('content')


<style>

body{
background:#fff;

}
.ss{
  margin-left:400px;

}

.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}


</style>

<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Invoice</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

<body>

<div class="ss">
<div class="container-fluid">   
 <div class="row">
 @foreach($cust as $row1)
        <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-12">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-12">
						<div class="receipt-left">
            <a class="navbar-brand"><img width="270" height="40px" src="{{asset('cp/images/logo3.png')}}"  /></a>
            
        
          </div>
  
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						
					</div>
				</div>
            </div>
 
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
            <h5><b>Bill No. :</b> {{$row1->billno}}</h5>
							<h5>Customer Name : {{$row1->custname}}</h5>
							<h5><b>Mobile :</b> {{$row1->mobileno}}</h5>
							<h5><b>Email :</b> {{$row1->custemail}}</h5>
							<h5><b>Address :</b> {{$row1->address}}</h5>
              <h5><b>Payment Method :</b> {{$row1->shippingtype}}</h5>
              
						</div>
					</div>
				
				</div>
            </div>
            @endforeach
                    @php
                    $count =0;
                    $gst =0;
                    $total=0;
                    $k=1;
                    @endphp
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Per Qty. Price</th>
                            <th>Total Ammount</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cust1 as $item3)
                        <tr>
                        <td class="col-md-1">{{$k}}</td>
                            <td class="col-md-5">@php
                    $productid=DB::table('product_entry_models')->where('id',$item3->productid)->get();
                    $product=DB::table('product_models')->where('id',$productid[0]->pnameid)->value('product_name');
                    
                    @endphp
                  
                  {{$productid[0]->category}}</td>

                  <td>{{$item3->qty}}</td>
                            
                  <td class="col-md-4"><i class="fa fa-inr"></i> {{$item3->pprice}}</td>
                  <td class="col-md-4"><i class="fa fa-inr"></i> @php
                              $eval=$item3->qty."*".$item3->pprice;
                              $p=eval('return '.$eval.';');
                              $count=$count+$p;
                              $gst=($count*5)/100;
                              $total=$count+$gst ;
                              @endphp {{$p}}</td>
                        </tr>
                       
                        @php
                        $k++;
                        @endphp
                        @endforeach
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>GST: </strong>
                            </p>
		
							
							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-inr"></i>{{$count}}</strong>
                            </p>
                          
							<p>
                                <strong><i class="fa fa-inr"></i> {{$gst}}</strong>
                            </p>
							
							</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                            <td class="text-right"><h2><strong>Grand Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$total}}</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @foreach($cust as $row1)
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
							<h5><b>Date :</b>{{$row1->orderdate}} </h5>
							<h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
						</div>
					</div>
					
				</div>
            </div>
			@endforeach
        </div>   
        
        
	</div>
</div>
  </div>
  </body> 


@endsection


