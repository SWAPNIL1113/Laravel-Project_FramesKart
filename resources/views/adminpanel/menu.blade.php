@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h1 class="card-title">All Customer Orders</h1>
                

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Id</th>
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Pinecode No.</th>
                      <th>Bill No.</th>
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

                  
    <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->custname}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->custemail}}</td>
            <td>{{$item->mobileno}}</td>
            <td>{{$item->pincode}}</td>
            <td>{{$item->billno}}</td>
            <td>{{$item->shippingtype}}</td>
            <td>₹ {{$item->total}}</td>
            <td><b class="btn btn-success">{{$item->orderdate}}</b></td>
            <td><a href="/orderview/{{$item->billno}}"><button type="submit" class="btn btn-warning">View Details</button></a></td>
            <td><a href="/admin_bill/{{$item->billno}}"><button type="submit" class="btn btn-info">Bill</button></a></td>
            <td><a href="/bill_pdf/{{$item->billno}}"><button type="submit" class="btn btn-danger">Download Pdf</button></a></td>
    </tr>
    @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</div>

@endsection