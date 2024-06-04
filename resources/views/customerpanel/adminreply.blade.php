@extends('customerpanel.customermaster')

@section('content')

<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Inquiry</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>Mobile No.</th>
                      <th>Product Name</th>
                      <th>Message</th>
                      <th>View Reply</th>
          
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($adminreply as $item)
                  
    <tr>
          
            <td>{{$item->fname}}</td>
            <td>{{$item->emailid}}</td>
            <td>{{$item->phoneno}}</td>
            <td>{{$item->productname}}</td>
            <td>{{$item->desc}}</td>
            <td><a href="{{url('viewreply1/'.$item->id)}}" class="btn btn-warning" >View Reply</a></td>
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

