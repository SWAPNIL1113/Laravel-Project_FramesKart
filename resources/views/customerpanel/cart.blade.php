<?php

use App\Http\Controllers\CustomerPanelController;
$total= CustomerPanelController::cartitem();

?>
@extends('customerpanel.customermaster')

@section('content')

<head>
<style>

.payment-info {
  background: rgb(51, 153, 255);
  padding: 10px;
  border-radius: 6px;
  color: #fff;
  font-weight: bold;
}

.product-details {
  padding: 10px;
}

body {
  background: #eee;
}

.cart {
  background: #fff;
  border: solid 1px;
}

.p-about {
  font-size: 12px;
}

.table-shadow {
  -webkit-box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
  box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
}

.type {
  font-weight: 400;
  font-size: 10px;
}

label.radio {
  cursor: pointer;
}

label.radio input {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  pointer-events: none;
}

label.radio span {
  padding: 1px 12px;
  border: 2px solid #ada9a9;
  display: inline-block;
  color: #8f37aa;
  border-radius: 3px;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 300;
}

label.radio input:checked + span {
  border-color: #fff;
  background-color: blue;
  color: #fff;
}

.credit-inputs {
  background: rgb(255, 255, 153);
  color: #000 !important;
  border-color: rgb(102,102,221);
}

.credit-inputs::placeholder {
  color: #000;
  font-size: 13px;
}

.credit-card-label {
  font-size: 12px;
  font-weight: 500;
}

.form-control.credit-inputs:focus {
  background: rgb(255, 255, 153);
  border: rgb(102,102,221);
}

.line {
  border-bottom: 1px solid rgb(255, 255, 153);
}

.information span {
  font-size: 12px;
  font-weight: 500;
}

.information {
  margin-bottom: 5px;
}

.items {
  -webkit-box-shadow: 5px 5px 4px -1px rgba(0,0,0,0.25);
  box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
}

.spec {
  font-size: 11px;
}

</style>
</head>

<body style="background:#fff;">
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>My Cart</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
  <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                <center>
@if(session('status'))

<h3 style="color:red">{{session('status')}}</h3>
@endif
</center>
                    <div class="d-flex flex-row align-items-center"><span class="ml-2"><a href="/products" class="btn btn-danger">Continue Shopping</a></span></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have {{$total}} items in your cart</span>
                        
                    </div>
                    @php
                    $count =0;
                    $gst =0;
                    $total=0;
                    @endphp
                    @foreach($cart as $item)
                    @php 
                            $productid=DB::table('product_entry_models')->where('id',$item->productid)->value('pnameid');
                            $productName=DB::table('product_models')->where('id',$productid)->value('product_name')
                            
                        @endphp   
                    <div class="d-flex justify-content-between align-items-center mt-6 p-4 items rounded">
                    @php
                    $image=DB::table('product_entry_models')->where('id',$item->productid)->value('image');
                    @endphp
                    @php
                    $cat=DB::table('product_entry_models')->where('id',$item->productid)->value('category');
                    @endphp  
                    <div class="d-flex flex-row"><img class="rounded" src="{{asset ('image_upload/'.$image)}}" width="100px" height="100px" style="margin-right:20px;">
                        
                            <div class="ml-2"><span class="font-weight-bold d-block">Product Name :{{$cat}}</span> Category : {{$productName}}<span class="spec"></span></br></span>Quntity : {{$item->qty}} <a class="btn btn-warning" href="{{url('qty/'.$item->id)}}">Add Quntity</a></br>Per Product Price :₹{{$item->pprice}}</div>
                        </div>
                        @php
                        $eval=$item->qty."*".$item->pprice;                                                                                                                                                   
                        $p=eval('return '.$eval.';');
                        $count=$count+$p;
                        $gst=($count*5)/100;
                        $total=$count+$gst ;
                        @endphp
                        <div class="d-flex flex-row align-items-center">
                        <span class="d-block ml-5 font-weight-bold">Total Price :₹{{$p}}</span>
                        
                      </div>
                        <div class="d-flex flex-row align-items-center">
                          <span class="d-block"><a href="{{url('deleteaddtocart/'.$item->id)}}"><button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure for delete')">Delete</button></a></span>
                          </div>
                          
                    </div>
                    
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Payment details</span></div> </label>



<form action="{{url('checkoutinsertdata')}}" method="post">
  @csrf
                    <div><label class="credit-card-label">Order Date</label><input type="text" class="form-control credit-inputs" name="orderdate" value="{{ now()->format('d-m-Y') }}"></div>
                    <div><label class="credit-card-label">Full Name</label><input type="text" class="form-control credit-inputs" value="{{old('custname')}}" name="custname" placeholder="Enter Name"><h6 style="color:red">@error('custname'){{$message}}@enderror</h6></div>
                    <div><label class="credit-card-label">Address</label><input type="text" class="form-control credit-inputs" value="{{old('address')}}" name="address" placeholder="Enter Address"><h6 style="color:red">@error('address'){{$message}}@enderror</h6></div>
                    <div><label class="credit-card-label">Email</label><input type="email" class="form-control credit-inputs" value="{{old('custemail')}}" name="custemail" placeholder="Enter Email-id"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Mobile No.</label><input type="text" name="mobileno" value="{{old('mobileno')}}" class="form-control credit-inputs" placeholder="Enter Mobile No."></div>
                        <div class="col-md-6"><label class="credit-card-label">Pincode</label>  <input type="text" name="pincode" class="form-control credit-inputs" placeholder="Enter Pincode"> <h6 style="color:red">@error('pincode'){{$message}}@enderror</h6></div>
                        
                    </div>
                    <div><label class="credit-card-label">Payment Method :</label><input type="text" class="form-control credit-inputs" name="shippingtype" value="COD(cash on delivery)" readonly></div>
                    <div><input type="hidden" class="form-control credit-inputs" value="0" name="billno" ></div>
                    <div><input type="hidden" class="form-control credit-inputs" value="{{$total}}" name="total" ></div>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Sub total</span><span>₹{{$count}}</span></div>
                    <div class="d-flex justify-content-between information"><span>GST (5%)</span><span>₹{{$gst}}</span></div>
                    <div class="d-flex justify-content-between information"><span>Final Ammount</span><span>₹{{$total}}</span></div>
                    <button class="btn btn-warning btn-block d-flex justify-content-between mt-3" ><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>

                    </form>
            </div>
        </div>
    </div>
            

  @endsection
  


