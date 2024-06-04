@extends('customerpanel.customermaster')

@section('content')

<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">Admin Reply</h1>

         
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Message</th>
                    <th>Admin reply</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($viewreply as $item)
    <tr>
            <th>{{$item->desc}}</th>
            <th><textarea rows="4" cols="50" readonly>{{$item->reply}}</textarea></th>
        
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
