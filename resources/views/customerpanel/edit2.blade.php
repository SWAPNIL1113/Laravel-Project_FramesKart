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
                     <h3>Update Quntity</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
<center>
@if(session('status'))

                    <h3 style="color:red">{{session('status')}}</h3>
                    @endif
                    </br></br></br>
                    <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Product Quantity Update</span></div> </label>



<form action="{{url('updatedata2/'.$q->id)}}" method="post">

@csrf
@method('PUT')
                    <div><label class="credit-card-label">Product Quntity </label><input type="number" class="form-control credit-inputs" name="qty" min="1" max="20" value="{{$q->qty}}"></div>
                    

                    <button class="btn btn-warning btn-block d-flex justify-content-between mt-3" type="submit"><span>Update<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>

                    </form>
            </div>
        </div>
    </div>

</center>
</body>
@endsection




