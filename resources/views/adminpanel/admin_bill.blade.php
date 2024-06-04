@extends('adminpanel.adminmaster')

@section('content')

<style>

body{
background:#fff;

}
.ss{
  margin-left:400px;

}

.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}


</style>

<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Invoice</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

<body>

<div class="ss">
<div class="container-fluid">   
 <div class="row">
 @foreach($viewbill as $row1)
        <div class="receipt-main col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-12">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-12">
						<div class="receipt-left">
            <a class="navbar-brand"><img width="270" height="40px" src="{{asset('cp/images/logo3.png')}}"  /></a>
            
        
          </div>
  
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						
					</div>
				</div>
            </div>
 
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
            <h5><b>Bill No. :</b> {{$row1->billno}}</h5>
							<h5>Customer Name : {{$row1->custname}}</h5>
							<h5><b>Mobile :</b> {{$row1->mobileno}}</h5>
							<h5><b>Email :</b> {{$row1->custemail}}</h5>
							<h5><b>Address :</b> {{$row1->address}}</h5>
              <h5><b>Payment Method :</b> {{$row1->shippingtype}}</h5>
              
						</div>
					</div>
				
				</div>
            </div>
            @endforeach
                    @php
                    $count =0;
                    $gst =0;
                    $total=0;
                    $k=1;
                    @endphp
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Per Qty. Price</th>
                            <th>Total Ammount</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cust1 as $item3)
                        <tr>
                        <td class="col-md-1">{{$k}}</td>
                            <td class="col-md-5">@php
                    $productid=DB::table('product_entry_models')->where('id',$item3->productid)->get();
                    $product=DB::table('product_models')->where('id',$productid[0]->pnameid)->value('product_name');
                    
                    @endphp
                  
                  {{$productid[0]->category}}</td>

                  <td>{{$item3->qty}}</td>
                            
                  <td class="col-md-4"><i class="fa fa-inr"></i> {{$item3->pprice}}</td>
                  <td class="col-md-4"><i class="fa fa-inr"></i> @php
                              $eval=$item3->qty."*".$item3->pprice;
                              $p=eval('return '.$eval.';');
                              $count=$count+$p;
                              $gst=($count*5)/100;
                              $total=$count+$gst ;
                              @endphp {{$p}}</td>
                        </tr>
                       
                        @php
                        $k++;
                        @endphp
                        @endforeach
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>GST(5%): </strong>
                            </p>
		
							
							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-inr"></i>{{$count}}</strong>
                            </p>
                          
							<p>
                                <strong><i class="fa fa-inr"></i> {{$gst}}</strong>
                            </p>
							
							</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                            <td class="text-right"><h2><strong>Grand Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$total}}</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @foreach($viewbill as $row1)
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
							<h5><b>Date :</b>{{$row1->orderdate}} </h5>
							<h5 style="color: rgb(140, 140, 140);">Thanks for shopping..!</h5>
							<h5 style="margin-left:550px;"><b><img width="120" height="60px" src="{{asset('cp/images/swapnil.png')}}"  /></b></br>
							Authority Sign </h5>
						</div>
					</div>
					
				</div>
            </div>
			@endforeach
        </div>   
        
        
	</div>
</div>
  </div>
  </body> 

@endsection