@extends('adminpanel.adminmaster')

@section('content')
<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Products</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead class="classnames">
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Prduct Name</th>
                        <th>Company</th>
                        <th>Colour</th>
                        <th>Descripation</th>
                        <th>Image</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Price</th> 
                        <th>Edit</th> 
                        <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($product_entry as $item1)
    <tr>
    <td>{{$item1->id}}</td>
        <td>{{$item1->category}}</td>
        <td>{{$item1->product_entry->product_name}}</td>
        <td>{{$item1->company}}</td>
        <td>{{$item1->color}}</td>
        <td><textarea rows="4" cols="50" readonly>{{$item1->description}}</textarea></td>

        <td><img src="image_upload/{{$item1->image}}"height="px" width="100px"></img></td>
        <td><img src="image_upload/{{$item1->image1}}"height="px" width="100px"></img></td>    
        <td><img src="image_upload/{{$item1->image2}}"height="px" width="100px"></img></td>
        <td><img src="image_upload/{{$item1->image3}}"height="px" width="100px"></img></td>
        <td><img src="image_upload/{{$item1->image4}}"height="px" width="100px"></img></td>
        <td>₹ {{$item1->price}}</td>
        <td><a href="{{url('editproductentry/'.$item1->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{url('deleteproductentry/'.$item1->id)}}" onclick="return confirm('Are you sure for delete')"><i style="color:red;" class="fas fa-trash"></i></a></td>
    </tr>

                   


    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Prduct Name</th>
                        <th>Company</th>
                        <th>Colour</th>
                        <th>Descripation</th>
                        <th>Image</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Price</th> 
                        <th>Edit</th> 
                        <th>delete</th>
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

