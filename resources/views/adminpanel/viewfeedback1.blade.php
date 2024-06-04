@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Feedback</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <thead>
                    <tr>
               
                      <th>Feedback Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Image</th>
                      <th></th>


                    </tr>
                  </thead>
                  <tbody>
                  @foreach($vieworderdetail as $item)
    <tr>
  
            <td>{{$item->feedbacktitle}}</td>
            <td>{{$item->feedbackdesc}}</td>
            <td>{{$item->feedbackdate}}</td>
            <td><img src="{{asset ('image_upload/'.$item->feedbackimage)}}" height="100px" width="100px"></td>
        
    </tr>
    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                    <tr>
                    <th>Feedback Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Image</th>
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
