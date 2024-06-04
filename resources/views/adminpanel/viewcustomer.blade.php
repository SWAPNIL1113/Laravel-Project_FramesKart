@extends('adminpanel.adminmaster')

@section('content')

<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">All Customers</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Mobile No.</th>
                      <th>DOB</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($viewcustomer as $item)
    <tr>
    <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->mobile}}</td>
            <td>{{$item->dob}}</td>
            <td>{{$item->pass}}</td>
            <td>{{$item->email}}</td>
         
            <td>
                
                @if($item->status=='0')

                <b class="btn btn-danger">Deactive</b>

                @elseif($item->status=='1')

                <b class="btn btn-success">Active</b>

                @endif

            </td>
            <td><a href="{{url('deletecustomer/'.$item->id)}}" onclick="return confirm('Are you sure for delete')"><i style="color:red;" class="fas fa-trash"></i></a></td>
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
