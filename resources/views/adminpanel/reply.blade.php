@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Reply</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('Updatereply/'.$pedit->id)}}" method="post">
              @csrf
              @method('PUT')
                    @if(session('status'))

                    <h3 style="color:red">{{session('status')}}</h3>
                    @endif
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Message</label>
                    <textarea cols="50" rows="3" class="form-control" name="desc" readonly>{{$pedit->desc}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin Reply</label>
                    <textarea class="form-control" name="reply" id="exampleInputEmail1" placeholder="Reply"></textarea>
                  </div>
                  <h6 style="color:red">@error('pincode'){{$message}}@enderror</h6>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </form>
            </div>
    </section>
</div>
@endsection
