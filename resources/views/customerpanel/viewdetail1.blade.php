@extends('customerpanel.customermaster')

@section('content')


<head> 
<style>
body{background-color: #fff}.card{border:solid 1px ; background-color: #fff}.product{background-color: #fff}.brand{font-size: 13px}.act-price{color:red;font-weight: 700}.dis-price{text-decoration: line-through}.about{font-size: 14px}.color{margin-bottom:10px}label.radio{cursor: pointer}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 2px 9px;border: 2px solid #ff0000;display: inline-block;color: #ff0000;border-radius: 3px;text-transform: uppercase}label.radio input:checked+span{border-color: #ff0000;background-color: #ff0000;color: #fff}.btn-danger{background-color: #ff0000 !important;border-color: #ff0000 !important}.btn-danger:hover{background-color: #da0606 !important;border-color: #da0606 !important}.btn-danger:focus{box-shadow: none}.cart i{margin-right: 10px}
</style>
  </head>


  <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Detail</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      @if(session('status'))

<h3 style="color:red">{{session('status')}}</h3>
@endif

      <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
        @foreach($viewdetail1 as $item2)
            <div class="card">
                <div class="row">
                    <div class="col-md-5">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="{{asset ('image_upload/'.$item2->image)}}" width="200" height="200px" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="{{asset ('image_upload/'.$item2->image1)}}" height="70px" width="100PX"> <img onclick="change_image(this)" src="{{asset ('image_upload/'.$item2->image2)}}" height="70px" width="100PX"> <div class="thumbnail text-center"></br> <img onclick="change_image(this)" src="{{asset ('image_upload/'.$item2->image3)}}" height="70px" width="100PX"> <img onclick="change_image(this)" src="{{asset ('image_upload/'.$item2->image4)}}" height="70px" width="100PX"> </div></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"> {{$item2->product_entry->product_name}}</span>
                                <h5 class="text-uppercase">{{$item2->category}}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">₹ {{$item2->price}}</span>
                                    <!-- <div class="ml-2"> <small class="dis-price"></small> <span>40% OFF</span> </div> -->
                                </div>
                            </div>
                            <p class="about"> {{$item2->description}} </p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" checked> <span>{{$item2->size}}</span> </label>
                            </div>
                            <form action="/addtocart" method="POST">
                    @csrf
                        <input type="hidden" name="productid" value="{{$item2->id}}">
                        <input type="hidden" name="productqty" value="1">
                        <input type="hidden" name="productcart" value="cart">
                        <input type="hidden" name="billno" value="0">
                        <input type="hidden" name="pprice" value="{{$item2->price}}">
                        <input type="hidden" name="feedbacktitle" value="0">
                        <input type="hidden" name="feedbackdesc" value="0">
                        <input type="hidden" name="feedbackdate" value="0">
                        <input type="hidden" name="feedbackimage" value="0">
                        <div class="d-flex flex-column mt-4">
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4" >Add to cart</button> 
                        </div>
                      
 
              </form>

                        
                    </div>
                    
                </div>
              
            </div>
            @endforeach
        </div>
    </div>
</div>



        <script>

        function change_image(image){

        var container = document.getElementById("main-image");

        container.src = image.src;
        }



        document.addEventListener("DOMContentLoaded", function(event) {

        });
        </script>    


@endsection



