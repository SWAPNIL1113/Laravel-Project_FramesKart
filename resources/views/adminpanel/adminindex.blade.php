@extends('adminpanel.adminmaster')

@section('content')
<?php

use App\Http\Controllers\AdminPanelController;

$cust= AdminPanelController::CustomerRegModel();
$orders= AdminPanelController::orders();
$products = AdminPanelController::products();

?>

<div class="content-wrapper">
<section class="content">

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome {{Session::get('AdminLoginId')['email']}} </h1>
   
    </div>
  </section><!-- End Hero -->


</br></br></br>

  <div class="container-fluid">
        <div class="coloum">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{$orders}}</h3>

                      <p>Total Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="menu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{$cust}}</h3>

                      <p>Customers</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/viewcustomer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

              <div class="col-lg-3 col-6">  
              <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$products}}<sup style="font-size: 20px"></sup></h3>

                <p>Available Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/productentryview" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


                <!-- ./col -->
              </div>
      </div>
  </div>
</section>
</div> 
@endsection
  