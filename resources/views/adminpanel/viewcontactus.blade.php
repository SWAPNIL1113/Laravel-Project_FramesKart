@extends('adminpanel.adminmaster')

@section('content')

<div class="content-wrapper">

<div class="row">

          <div class="col-12">
            <div class="card">
            <center>

            @if(session('status'))

              <h3 style="color:green">{{session('status')}}</h3>
              @endif
              </center>
              <div class="card-header">
                <h1 class="card-title">Customer Side Inquiries</h1>
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
                      <th>View Reply</th>
                      <th>Reply</th>
                      
                      <th>Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($viewcontact as $item)
                  
    <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->emailid}}</td>
            <td>{{$item->phoneno}}</td>
            <td>{{$item->productname}}</td>
            <td>{{$item->desc}}</td>
            <td><a href="{{url('viewreply/'.$item->id)}}" class="btn btn-warning" >View Reply</a></td>
            <td><a href="{{url('editreply/'.$item->id)}}"><i class="fas fa-edit"></i></a></td>
            <td><a href="{{url('deletecontact/'.$item->id)}}" onclick="return confirm('Are you sure for delete')"><i style="color:red;" class="fas fa-trash"></i></a></td>
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