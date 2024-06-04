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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
            

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
               
                      <th>Feedback Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Image</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($vieworderdetail as $item)
    <tr>
  
            <td>{{$item->feedbacktitle}}</td>
            <td><textarea rows="4" cols="50" readonly>{{$item->feedbackdesc}}</textarea></td>
            <td>{{$item->feedbackdate}}</td>
            <td><img src="{{asset ('image_upload/'.$item->feedbackimage)}}" height="100px" width="100px"></td>
        
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