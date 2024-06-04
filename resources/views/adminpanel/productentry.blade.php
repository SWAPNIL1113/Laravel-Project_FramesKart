@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Entry Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Product Entry Master</li>
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
              <form action="{{url('productentry')}}" enctype="multipart/form-data" method="post">
              @csrf
                    @if(session('status'))

                    <h3 style="color:red">{{session('status')}}</h3>
                    @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="category" placeholder="Product Name" required>
                  </div>              
                <h6 style="color:red">@error('category'){{$message}}@enderror</h6>


                  <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                             <select class="form-control" name="pnameid" required>
                                    <option>Select Product</option>
                                    @foreach ($data as $row)
                                    <option value="{{$row->id}}">{{$row->product_name}}</option>
                                    @endforeach 
                            </select>
                    </div>
                    <h6 style="color:red">@error('pnameid'){{$message}}@enderror</h6>


                    <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                  </div>
                  <h6 style="color:red">@error('company'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Color</label>
                    <select class="form-control" name="color" required>
                                    <option>Select Color</option>
                                    @foreach ($data1 as $row)
                                    <option value="{{$row->color}}">{{$row->color}}</option>
                                    @endforeach 
                            </select>
                  </div>
                  <h6 style="color:red">@error('color'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Material</label>
                    <input type="text" class="form-control" name="material" placeholder="Material" required>
                  </div>
                  <h6 style="color:red">@error('material'){{$message}}@enderror</h6>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description " required></textarea>
                  </div>
                  <h6 style="color:red">@error('description'){{$message}}@enderror</h6>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <select class="form-control" name="size" required>
                                    <option>Select Size</option>
                                    @foreach ($data2 as $row1)
                                    <option value="{{$row1->size}}">{{$row1->size}}</option>
                                    @endforeach 
                            </select>
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
                    <input type="number" min="1" class="form-control" name="price" placeholder="Price" required>
                  </div>
                  <h6 style="color:red">@error('price'){{$message}}@enderror</h6>

                <div class="card-footer">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>

</div>
 
   

@endsection
  




    