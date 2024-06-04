@extends('customerpanel.customermaster')

@section('content')


@php

$id =Session::get('CustomerLoginId')['id'];

@endphp                           
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>inquiry</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="{{url('contact')}}" class="container" method="post">
                     @csrf
                        <fieldset>

                            <lable class="form-lable">Full Name</lable>
                           <input type="text" placeholder="Enter your full name" name="fname" required />
                           <h6 style="color:red">@error('fname'){{$message}}@enderror</h6>

                           <lable class="form-lable">Email Id</lable>
                           <input type="email" placeholder="Enter your email address" name="emailid" required />
                           <h6 style="color:red">@error('emailid'){{$message}}@enderror</h6>

                           <lable class="form-lable">Mobile NO.</lable>
                           <input type="text" placeholder="Enter Mobile No." name="phoneno" required />
                           <h6 style="color:red">@error('phoneno'){{$message}}@enderror</h6>

                           <lable class="form-lable">Product Name</lable>
                           <select class="form-control" name="productname" required>
                                    <option>Select Product</option>
                                    @foreach ($data as $row)
                                    <option value="{{$row->product_name}}">{{$row->product_name}}</option>
                                    @endforeach 
                            </select>
                            <h6 style="color:red">@error('productname'){{$message}}@enderror</h6>

                            <lable class="form-lable">Message</lable>
                            <textarea placeholder="Enter your message" name="desc" value="{{old('desc')}}" required></textarea>
                            <h6 style="color:red">@error('desc'){{$message}}@enderror</h6>
                            <input type="hidden" name="reply" value="0">
                            <input type="hidden" name="customerid" value="{{$id}}">
                           <input type="submit" value="Submit" /> </br> 
                        </fieldset>
                     </form>
<center>
                     <a href="/adminreply"><button class="btn btn-info">Inquiry history**</button></a>
</center>
                  </div>
               </div>
            </div>
         </div>
      </section>



@endsection