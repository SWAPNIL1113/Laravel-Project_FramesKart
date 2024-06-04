@extends('customerpanel.customermaster')

@section('content')
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Order Details</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

<div class="content-wrapper">

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
            

             
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    
                      <th>Product Name</th>
                      <th>Product</th>
                      <th>Quntity</th>
                      <th>Price</th>
                      <th>Total Price</th>
                      <th>Bill No.</th>
                      <th>Status</th>
                      <th>Feedback</th>
                      <th>View Feedback</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($vieworderdetail as $item)
    <tr>
    @php 
      
    $productName=DB::table('product_entry_models')->where('id',$item->productid)->value('category');
                            
     @endphp   
     @php
    $image=DB::table('product_entry_models')->where('id',$item->productid)->value('image');
     @endphp
            
            <td>{{$productName}}</td>
            <td><img src="{{asset ('image_upload/'.$image)}}" height="100px" width="100px"></td>
            <td>{{$item->qty}}</td>
            <td>₹ {{$item->pprice}}</td>
            @php

                    $total1=0;
                    $count=0;
                    $gst=0;


                        $eval=$item->qty."*".$item->pprice;
                        $p=eval('return '.$eval.';');
                        $count=$count+$p;
                        $gst=($count*5)/100;
                        $total1=$count+$gst ;

                        @endphp
            <td>₹ {{$count}}</td>
            <td>{{$item->billno}}</td>
            <td> @if($item->pstatus=='order')

                <b class="btn btn-success">Order</b>

                @elseif($item->pstatus=='1')

                <b class="btn btn-info">cart</b>

                @endif</td>

            <td><a href="{{url('feedback/'.$item->id)}}" class="btn btn-danger">Feedback</a></td>    
            <td><a href="{{url('viewfeedback/'.$item->id)}}"  class="btn btn-warning">View Feedback</a></td> 
    </tr>
    @endforeach
                  </tbody>             
                </table>
              <center>
                <h6>Total Price : ₹{{$count}}</h6>
                <h6>5 % GST included : ₹{{$gst}}</h6>
                <button class="btn btn-success">Grand Total :{{$total1}} </button>
              </center>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>
</div>



@endsection