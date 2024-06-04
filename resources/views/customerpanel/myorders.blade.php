@extends('customerpanel.customermaster')

@section('content')
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>My Orders</h3>
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

              
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bill No.</th>
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Pinecode No.</th>
                      <th>Payment Method</th>
                      <th>Total</th>
                      <th>Order Date</th>
                      <th>View Details</th>
                      <th>Bill</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($myorders as $item)

                  
    <tr style="white-space: unset;">
            <td>{{$item->billno}}</td>
            <td>{{$item->custname}}</td>
            <td >{{$item->address}}</td>
            <td>{{$item->custemail}}</td>
            <td>{{$item->mobileno}}</td>
            <td>{{$item->pincode}}</td>
            <td>{{$item->shippingtype}}</td>
            <td>₹ {{$item->total}}</td>
            <td>{{$item->orderdate}}</td>
            <td><a href="/vieworderdetail/{{$item->billno}}"><button type="submit" class="btn btn-warning">View Details</button></a></td>
            <td><a href="/bill/{{$item->billno}}"><button type="submit" class="btn btn-info">View</button></a></td>
            <td><a href="/bill_pdf/{{$item->billno}}"><button type="submit" target="blank" class="btn btn-danger">Download Pdf</button></a></td>
    </tr>
    @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
            <!-- /.card -->
          </div>
        </div>

</div>



@endsection
