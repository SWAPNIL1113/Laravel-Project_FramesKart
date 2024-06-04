@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Product Master</li>
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
                <h3 class="card-title">Product Entry</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('Updateproductentry/'.$pedit->id)}}" enctype="multipart/form-data" method="post">
              @csrf
              @method('PUT')
                    @if(session('status'))

                    <h3 style="color:red">{{session('status')}}</h3>
                    @endif
                <div class="card-body">

              

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="category" value="{{$pedit->category}}" required>
                  </div>              
                <h6 style="color:red">@error('category'){{$message}}@enderror</h6>

                

                  <div class="form-group">
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" name="company" value="{{$pedit->company}}" required>
                  </div>
                  <h6 style="color:red">@error('company'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Color</label>
                    <input type="text" class="form-control" name="color" value="{{$pedit->color}}" readonly>
                  </div>
                  <h6 style="color:red">@error('color'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Material</label>
                    <input type="text" class="form-control" name="material" value="{{$pedit->material}}" required>
                  </div>
                  <h6 style="color:red">@error('material'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" value="{{$pedit->description}}" required></textarea>
                  </div>
                  <h6 style="color:red">@error('description'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                   <input type="text" class="form-control" name="size" value="{{$pedit->size}}" readonly>
                  </div>
                  <h6 style="color:red">@error('size'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" name="image" required>
                  </div>
                  <h6 style="color:red">@error('image'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Image 1</label>
                    <input type="file" class="form-control" name="image1" required>
                  </div>
                  <h6 style="color:red">@error('image'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Image 2</label>
                    <input type="file" class="form-control" name="image2" required>
                  </div>
                  <h6 style="color:red">@error('image'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Image 3</label>
                    <input type="file" class="form-control" name="image3" required>
                  </div>
                  <h6 style="color:red">@error('image'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Image 4</label>
                    <input type="file" class="form-control" name="image4" required>
                  </div>
                  <h6 style="color:red">@error('image'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                  </div>
                  <h6 style="color:red">@error('price'){{$message}}@enderror</h6>

                <div class="card-footer">

                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
    </section>

</div>
 
   

@endsection