@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Size Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Size Master</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Size</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('Updatesize/'.$pedit->id)}}" method="post">
              @csrf
                    @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <input type="text" class="form-control" type="text" value="{{$pedit->size}}" name="size" id="exampleInputEmail1" placeholder="Enter Size">
                  </div>
                  <h6 style="color:red">@error('size'){{$message}}@enderror</h6>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
    </section>

</div>

@endsection