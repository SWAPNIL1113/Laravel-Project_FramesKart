@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
            

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Id</th>
                      <th>Product Name</th>
                      <th>Product</th>
                      <th>Quntity</th>
                      <th>Per Product Price</th>
                      <th>Bill No.</th>
                      <th>Status</th>
                      <th>Feedback</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($vieworderdetail as $item)
    <tr>
    @php 
      $productid=DB::table('product_entry_models')->where('id',$item->productid)->value('pnameid');
    $productName=DB::table('product_models')->where('id',$productid)->value('product_name')
                            
     @endphp   
     @php
    $image=DB::table('product_entry_models')->where('id',$item->productid)->value('image');
     @endphp
            <td>{{$item->id}}</td>
            <td>{{$productName}}</td>
            <td><img src="{{asset ('image_upload/'.$image)}}" height="100px" width="100px"></td>
            <td>{{$item->qty}}</td>
            <td>₹ {{$item->pprice}}</td>
            <td>{{$item->billno}}</td>
            <td> @if($item->pstatus=='order')

                <b class="btn btn-success">Order</b>

                @elseif($item->pstatus=='1')

                <b class="btn btn-info">cart</b>

                @endif</td>
                <td><a href="{{url('viewfeedback1/'.$item->id)}}" class="btn btn-warning" >View Feedback</a></td>
    </tr>
    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                    <tr>
                    <th>Id</th>
                      <th>Product Name</th>
                      <th>Product</th>
                      <th>Quntity</th>
                      <th>Per Product Price</th>
                      <th>Bill No.</th>
                      <th>Status</th>
                      <th>Feedback</th>
                    </tr>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</div>

@endsection

