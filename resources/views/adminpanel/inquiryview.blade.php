@extends('adminpanel.adminmaster')

@section('content')

<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">User Side Inquiries</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>Mobile No.</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($inquiryview as $item)
                  
    <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->emailid}}</td>
            <td>{{$item->phoneno}}</td>
            <td>{{$item->productname}}</td>
            <td>{{$item->desc}}</td>
            <td><a href="{{url('deletecontact1/'.$item->id)}}" onclick="return confirm('Are you sure for delete')"><i style="color:red;" class="fas fa-trash"></i></a></td>
    </tr>
    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                    <tr>
                    <th>Id</th>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>Mobile No.</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Delete</th>
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