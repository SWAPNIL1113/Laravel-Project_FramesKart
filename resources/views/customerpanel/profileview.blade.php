@extends('customerpanel.customermaster')

@section('content')

<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Profile</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
<!-- ======= About Us Section ======= -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
        
            @foreach($profile as $row1)
            <h4 class="mb-2">{{$row1->name}}</h4>
            <p class="text-muted mb-4">{{$row1->email}}</p>
        

              <div>
                <p class="text-muted mb-0">Address</p>
                <h4 class="mb-2">{{$row1->address}}</h4>
              </div>
              <div class="px-3">
                
                <p class="text-muted mb-0">City</p>
                <h4 class="mb-2">{{$row1->city}}</h4>
              </div>
              <div>
                <p class="text-muted mb-0">Mobile</p>
                <h4 class="mb-2">{{$row1->mobile}}</h4>
              </div>
              <div>
                <p class="text-muted mb-0">DOB</p>
                <h4 class="mb-2">{{$row1->dob}}</h4>
              </div>
            
              </div>
            <div class="card-body text-center">
            <a href="{{url('editprofile/'.$row1->id)}}" class="btn btn-info"> Edit </a>
   
           

            </div>
            
          </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>
 
  @endsection