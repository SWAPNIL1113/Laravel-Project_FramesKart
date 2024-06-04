@extends('adminpanel.adminmaster')

@section('content')

<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Reply</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>reply</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($viewreply as $item)
    <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->reply}}</td>
            <td><a class="btn btn-danger" href="/viewcontactus">Back </a></td>
        
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
