<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRegModel;
use App\Models\ProductModel;
use App\Models\ProductEntryModel;
use App\Models\AddtocartModel;
use App\Models\PincodeModel;
use App\Models\CheckoutModel;
use App\Models\InquiryModel;
use App\Models\CustomerContactModel;
use Session;
use PDF;
use DB;


class CustomerPanelController extends Controller
{
 
    public function profileview()
    {
        $id =Session::get('CustomerLoginId')['id'];
        $profile=CustomerRegModel::where('id',$id)->get();
        return view('customerpanel.profileview',compact('profile'));

    }





public function editprofile($id)
{
    $pedit=CustomerRegModel::find($id);
    return view('/customerpanel.editprofile',compact('pedit'));

}
public function Updateprofile(Request $request,$id)
{
    $pupdate=CustomerRegModel::find($id);
    $pupdate->name=$request->input('name');
    $pupdate->address=$request->input('address');
    $pupdate->city=$request->input('city');
    $pupdate->mobile=$request->input('mobile');
    $pupdate->dob=$request->input('dob');
    $pupdate->email=$request->input('email');
    $pupdate->pass=$request->input('pass');
    $pupdate->update();
    return redirect('/profileview')->with('status','Profile Update Successfully');

}

public function productentrycustdropdwon()
{
   
    return view('customerpanel.customerindex');

}


public function productview()
{
    $product_entry=ProductEntryModel::with('product_entry')->get();
    $product=ProductModel::with('product')->get();
    return view('customerpanel.products',compact('product_entry','product'));

}

public function viewdetail($id)
{

    $viewdetail=ProductEntryModel::where(['pnameid'=>$id])->get();
    return view('customerpanel.viewdetail',compact('viewdetail'));

}

public function addtocart(Request $request)
    {
        if($request ->session()->has('CustomerLoginId'))
        {
            $check=AddtocartModel::where(['productid'=>$request->productid,'pstatus'=>'cart','userid'=>$request->session()->get('CustomerLoginId')['id']])->first();
            if($check)
            {
                $s=AddtocartModel::find($check->id);
                $s->qty=$s->qty+1;
                $s->update();
            }
            else
        {

            $cart=new AddtocartModel;
            $cart->userid=$request->session()->get('CustomerLoginId')['id'];
            $cart->productid=$request->productid;
            $cart->qty=$request->productqty;
            $cart->pprice=$request->pprice;
            $cart->billno=$request->billno;
            $cart->pstatus=$request->productcart;
            $cart->feedbacktitle=$request->feedbacktitle;
            $cart->feedbackdesc=$request->feedbackdesc;
            $cart->feedbackdate=$request->feedbackdate;
            $cart->feedbackimage=$request->feedbackimage;
    
            $cart->save();

        }
        return redirect('/products')->with('status','Product Added to cart Successfully');

        }
    }

    static function cartitem()
{

    $id =Session::get('CustomerLoginId')['id'];
    return AddtocartModel::where(['userid'=>$id,'pstatus'=>'cart'])->count();

}

public function cart(Request $request)
{
    $id =Session::get('CustomerLoginId')['id'];
    $data2=PincodeModel::all();
    $cart=AddtocartModel::where(['userid'=>$id,'pstatus'=>'cart'])->get();
    return view('customerpanel.cart',compact('cart','data2'));

}

public function viewdetail1($id)
{

    $viewdetail1=ProductEntryModel::where(['id'=>$id])->get();
    return view('customerpanel.viewdetail1',compact('viewdetail1'));

}
public function edit2($id)
{
    $q=AddtocartModel::find($id);
    return view('/customerpanel.edit2',compact('q'));

}
public function update2(Request $request,$id)
{
    $s=AddtocartModel::find($id);
    $s->qty=$request->input('qty');
    $s->update();
    return redirect('/cart')->with('status','Product Quntity Update Successfully');

}
public function destroycart($id)
{
    $sdelete=AddtocartModel::find($id);
    $sdelete->delete();
    return redirect('/cart')->with('status','Product deleted form cart Successfully');
}

public function checkoutinsertdata(Request $request)
    {
        if($request ->session()->has('CustomerLoginId'))
        {

            $validation=$request->validate([
                'pincode'=>'required|max:6|min:6',
                'address'=>'required|min:20',
                'custname'=>'required|min:15'

            ]);

            $cart=new CheckoutModel;
            $cart->custid=$request->session()->get('CustomerLoginId')['id'];
            $cart->custname=$request->custname;
            $cart->address=$request->address;
            $cart->mobileno=$request->mobileno;
            $cart->custemail=$request->custemail;
            $cart->pincode=$request->pincode;
            $cart->billno=$request->billno;
            $cart->shippingtype=$request->shippingtype;
            $cart->total=$request->total;
            $cart->orderdate=$request->orderdate;
    
            $cart->save();
            $checkoutid=$cart->id;
            $cart->billno=$checkoutid;
            $cart->update();

            $updatearray=[
                'billno'=>$checkoutid,
                'pstatus'=>'order'

            ];
            DB::table('addtocart_models')->where(['userid'=>$cart->custid,'pstatus'=>'cart','billno'=>'0'])->update($updatearray);
            return redirect('/cart')->with('status','Checkout Successfully');

        }
    }

    public function myorders()
    {
        $id =Session::get('CustomerLoginId')['id'];
        $myorders=CheckoutModel::where('custid',$id)->get();
        return view('customerpanel.myorders',compact('myorders'));

    }

    public function vieworderdetail($id)
    {
        $vieworderdetail=AddtocartModel::where(['billno'=>$id])->get();
        return view('customerpanel.vieworderdetail',compact('vieworderdetail'));

    }

    public function bill($id)
    {
        $viewbill=CheckoutModel::where(['billno'=>$id])->get();
        $cust1=AddtocartModel::where('billno',$id)->get();
        return view('customerpanel.bill',compact('viewbill','cust1'));

    }

    public function invoice_pdf($id)
    {
        $cust=CheckoutModel::where(['billno'=>$id])->get();
        $cust1=AddtocartModel::where('billno',$id)->get();
        $pdf=PDF::loadview('customerpanel.bill_pdf',array('cust1'=>$cust1,'cust'=>$cust));
       
        return $pdf->stream();

        return $pdf->download('invoice.pdf');

    }

    public function productview1()
    {
        $product_entry=ProductEntryModel::with('product_entry')->get();
        $product=ProductModel::with('product')->get();
        return view('userpanel.user_products',compact('product_entry','product'));
    
    }    
    public function viewdetail2($id)
    {
    
        $viewdetail1=ProductEntryModel::where(['id'=>$id])->get();
        return view('userpanel.viewdetail2',compact('viewdetail1'));
    
    }


    public function feedback($id)
    {
        $pedit=AddtocartModel::find($id);
        return view('/customerpanel.feedback',compact('pedit'));
    
    }

    public function feedbackinsert(Request $request,$id)
{
    $pupdate=AddtocartModel::find($id);
    $pupdate->feedbacktitle=$request->input('feedbacktitle');
    $pupdate->feedbackdesc=$request->input('feedbackdesc');
    $pupdate->feedbackdate=$request->input('feedbackdate');
    
    
    $file = $request ->file('feedbackimage');
    $extenstion = $file ->getClientOriginalExtension();
    $filename =rand(11111, 99999).'.'.$extenstion;
    $file->move('image_upload/',$filename);
    $pupdate-> feedbackimage =$filename;
   
    $pupdate->update();
    return redirect('/myorders')->with('status','Product Update Successfully');

}

public function vieworderdetail1($id)
{
    $vieworderdetail=AddtocartModel::where(['id'=>$id])->get();
    return view('customerpanel.viewfeedback',compact('vieworderdetail'));

}

public function inquiry()
             {
                 return view('userpanel.inquiry');
             }
                 public function insertinquiry(Request $request)
                 {
                     
                   
                     $s=new InquiryModel;
                     $s->fname=$request->input('fname');
                     $s->emailid=$request->input('emailid');
                     $s->phoneno=$request->input('phoneno');
                     $s->productname=$request->input('productname');
                     $s->desc=$request->input('desc');
                    
                     $s->save();
                     
                     return redirect('/inquiry')->with('status','Inquiry added successfully');
                 }

                 public function inquiryview()
                 {
                     $inquiryview=InquiryModel::all(); //customerview
                     return view('adminpanel.inquiryview',compact('inquiryview'));
                 }
                 
            public function contactus()
        {
            return view('customerpanel.contactus');
        }
            public function contact(Request $request)
            {
                
    
                $s=new CustomerContactModel;
                $s->fname=$request->input('fname');
                $s->emailid=$request->input('emailid');
                $s->phoneno=$request->input('phoneno');
                $s->productname=$request->input('productname');
                $s->desc=$request->input('desc');
                $s->customerid=$request->input('customerid');
                $s->reply=$request->input('reply');
                
                $s->save();
                
                return redirect('/contactus');
            }


            public function adminreply()
            {
                $id =Session::get('CustomerLoginId')['id'];
                $adminreply=CustomerContactModel::where(['customerid'=>$id])->get();
                return view('customerpanel.adminreply',compact('adminreply'));
        
            }

            public function viewreply1($id)
            {
                $viewreply=CustomerContactModel::where(['id'=>$id])->get();
                return view('customerpanel.viewreply1',compact('viewreply'));

            }

            public function categorydropdown()
{
   
    return view('userpanel.index');

}

public function category($id)
{

    $viewdetail=ProductEntryModel::where(['pnameid'=>$id])->get();
    return view('userpanel.category',compact('viewdetail'));

}

}
