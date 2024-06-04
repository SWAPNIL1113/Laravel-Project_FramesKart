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
                <h3 class="card-title">Size</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('insertsize')}}" method="post">
              @csrf
                    @if(session('status'))

                    <h3 style="color:red">{{session('status')}}</h3>
                    @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <input type="text" class="form-control" name="size" id="exampleInputEmail1" placeholder="Enter Size">
                  </div>
                  <h6 style="color:red">@error('size'){{$message}}@enderror</h6>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Size</h3>
                    </div>   
            
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                <tr style="text-align: center;">
                    <th>Id</th>
                    <th>Size</th>
                    <th>Edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                @foreach($color as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->size}}</td>
                    <td><a href="{{url('editsize/'.$item->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{url('deletesize/'.$item->id)}}" onclick="return confirm('Are you sure for delete')"><i style="color:red;" class="fas fa-trash"></i></a></td>

                </tr>
            @endforeach

                    

            </tbody>
            <thead>
                <tr style="text-align: center;">
                    <th>Id</th>
                    <th>Size</th>
                    <th>Edit</th>
                    <th>delete</th>
                </tr>
            </thead>
        </table>

        </div><!-- /.container-fluid -->
        </section>
</div>
@endsection