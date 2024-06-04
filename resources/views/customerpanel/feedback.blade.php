@extends('customerpanel.customermaster')

@section('content')

<head>

<style>

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: top;
      align-items: center;
      text-align: center;
      min-height: -10vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #000;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #000;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #000;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #000;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content input[type=date],.form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 1;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}



.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #000;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 1;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}


  </style>

</head>
<section>
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Feedback</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
<div class="container">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="s">Feedback</h3>
                        <form class="requires-validation" action="{{url('feedbackinsert/'.$pedit->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                    @method('PUT')

                        <div class="col-md-12">
                            
                               <input class="form-control" type="hidden"  name="feedbackdate" value="{{ now()->format('d-m-Y') }}" placeholder="Date" readonly required>
                            </div>

                            <div class="col-md-12">
                            <lable class="form-lable">Title</lable>
                               <input class="form-control" type="text"  name="feedbacktitle" placeholder="Feedback title" required>
                            </div>
                         

                            <div class="col-md-12">
                            <lable class="form-lable">Description</lable>
                               <input class="form-control" type="text" name="feedbackdesc" placeholder="Feedback Description" required>
                            </div>
                    
        

                            <div class="col-md-12">
                                <lable class="form-lable">Image</lable>
                               <input class="form-control" type="file"  name="feedbackimage"  required>
                            </div>
                          

                            <center>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-info">Send</button>
                            </div>
</center>
                        </form>
                    </div>
                </div>
            </div>
    </div>

    </section>



@endsection