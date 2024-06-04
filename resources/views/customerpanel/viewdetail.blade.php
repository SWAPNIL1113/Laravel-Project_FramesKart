@extends('customerpanel.customermaster')

@section('content')

<head>
<style>

.button {
  
	appearance: none;
	border: 0;
	background: transparent;
	color: #000;
	cursor: pointer;
	font-weight: bold;
	border-radius: 0;
	box-shadow: inset 0 0 0 var(--border-size) currentcolor;
	transition: background .8s ease;
}

</style>
</head>

<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Products</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

<section style="background-color: #eee;">
<center>
@if(session('status'))

<h3 style="color:red">{{session('status')}}</h3>
@endif
</center>
<section class="product_section layout_padding">

         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            @foreach($viewdetail as $row)
               <div class="col-sm-6 col-md-4 col-lg-3">
              
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                        <form action="/addtocart" method="POST">
                    @csrf
                        <input type="hidden" name="productid" value="{{$row->id}}">
                        <input type="hidden" name="productqty" value="1">
                        <input type="hidden" name="productcart" value="cart">
                        <input type="hidden" name="billno" value="0">
                        <input type="hidden" name="pprice" value="{{$row->price}}">
                        <input type="hidden" name="feedbacktitle" value="0">
                        <input type="hidden" name="feedbackdesc" value="0">
                        <input type="hidden" name="feedbackdate" value="0">
                        <input type="hidden" name="feedbackimage" value="0">
                        <a href="#" class="option1">
                        <button class="button" type="submit"> Add To Cart  </button>
                           </a>
                      
 
              </form>
              <a href="/viewdetail1/{{$row->id}}" class="option2">
              Detail
                           </a>
              
              
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{asset ('image_upload/'.$row->image)}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h6>
                        {{$row->category}}
                        </h6>
                        <h6>
                        ₹ {{$row->price}}
                        </h6>
                     </div>
                     <h6>{{$row->product_entry->product_name}} </h6>
                  </div>
                  
               </div>
               @endforeach
               </div>
               
      </section>


      @endsection