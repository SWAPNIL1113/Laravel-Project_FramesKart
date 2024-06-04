<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CustomerRegModel;
use App\Models\ProductEntryModel ;
use App\Models\PincodeModel ;
use App\Models\CheckoutModel ;
use App\Models\AddtocartModel ;
use App\Models\InquiryModel;
use App\Models\ColorModel;
use App\Models\SizeModel;
use App\Models\CustomerContactModel;



class AdminPanelController extends Controller
{
    public function product()
    {
        $product=ProductModel::all();
        return view('adminpanel.product',compact('product'));

    }

    public function InsertProduct(Request $request)
    {

$validation=$request->validate([
    'product_name'=>'required|max:15'
]);

        $s=new ProductModel;
        $s->product_name=$request->input('product_name');
       
        $s->save();
        return redirect('/product')->with('status','Category Added Successfully');

    }

    public function destroy($id)
{
    $pdelete=ProductModel::find($id);
    $pdelete->delete();
    return redirect('/product');
}
public function edit($id)
{
    $pedit=ProductModel::find($id);
    return view('/adminpanel.edit',compact('pedit'));

}
public function Update(Request $request,$id)
{
    $pupdate=ProductModel::find($id);
    $pupdate->product_name=$request->input('product_name');
    $pupdate->update();
    return redirect('/product')->with('status','Category Update Successfully');

}
public function viewcustomer()
    {
        $viewcustomer=CustomerRegModel::all();
        return view('/adminpanel.viewcustomer',compact('viewcustomer'));

    }
    public function destroy1($id)
    {
        $sdelete=CustomerRegModel::find($id);
        $sdelete->delete();
        return redirect('/viewcustomer');
    }

    public function productentrydropdown()
    {
        $data=ProductModel::all();
        $data1=ColorModel::all();
        $data2=SizeModel::all();
        return view('/adminpanel.productentry',compact('data','data1','data2'));
    }

    public function productentry(Request $request)  
    {
        $validation=$request->validate([
            'category'=>'required|max:50',
            'pnameid'=>'required|max:50',
            'company'=>'required|max:50',
            'color'=>'required|max:50',
            'material'=>'required|max:500',
            'description'=>'required|max:500',
            'size'=>'required|max:500',
            'image'=>'required|max:50000',
            'image1'=>'required|max:50000',
            'image2'=>'required|max:50000',
            'image3'=>'required|max:50000',
            'image4'=>'required|max:50000',
            'price'=>'required|max:100',

        ]);
 
        $s=new ProductEntryModel;
        $s->category=$request->input('category');
        $s->pnameid=$request->input('pnameid');
        $s->company=$request->input('company');
        $s->color=$request->input('color');
        $s->material=$request->input('material');
        $s->description=$request->input('description');
        $s->size=$request->input('size'); 

    
        $file = $request ->file('image');
        $extenstion = $file ->getClientOriginalExtension();
        $filename =rand(11111, 99999).'.'.$extenstion;
        $file->move('image_upload/',$filename);
        $s-> image =$filename;
        

        $file1 = $request ->file('image1');
        $extenstion1 = $file ->getClientOriginalExtension();
        $filename1 =rand(11111, 99999).'.'.$extenstion1;
        $file1->move('image_upload/',$filename1);
        $s-> image1 =$filename1;
        

        $file2 = $request ->file('image2');
        $extenstion2 = $file ->getClientOriginalExtension();
        $filename2 =rand(11111, 99999).'.'.$extenstion2;
        $file2->move('image_upload/',$filename2);
        $s-> image2 =$filename2;
        

        $file3 = $request ->file('image3');
        $extenstion3= $file ->getClientOriginalExtension();
        $filename3 =rand(11111, 99999).'.'.$extenstion3;
        $file3->move('image_upload/',$filename3);
        $s-> image3 =$filename3;
        
 
        $file4 = $request ->file('image4');
        $extenstion4 = $file ->getClientOriginalExtension();
        $filename4 =rand(11111, 99999).'.'.$extenstion4;
        $file4->move('image_upload/',$filename4);
        $s-> image4 =$filename4;

        $s->price=$request->input('price');
        $s->save();
        return redirect('/productentry')->with('status','Product Added Successfully');

    }

    public function insertproductentry()
    {
        $product_entry=ProductEntryModel::with('product_entry')->get();
        $product=ProductModel::with('product')->get();
        return view('adminpanel.productentryview',compact('product_entry','product'));

    }

    public function destroy_entry($id)
    {
        $ddelete=ProductEntryModel::find($id);
        $ddelete->delete();
        return redirect('/productentryview');
    }


    public function insertpincode(Request $request)
    {

$validation=$request->validate([
    'pincode'=>'required|max:6'
]);

        $s=new PincodeModel;
        $s->pincode=$request->input('pincode');
       
        $s->save();
        return redirect('/pincode')->with('status','Pincode Added Successfully');

    }

    public function destroy3($id)
{
    $pdelete=PincodeModel::find($id);
    $pdelete->delete();
    return redirect('/pincode');
}
public function edit3($id)
{
    $pedit=PincodeModel::find($id);
    return view('/adminpanel.editpin',compact('pedit'));

}
public function update3(Request $request,$id)
{
    $pupdate=PincodeModel::find($id);
    $pupdate->pincode=$request->input('pincode');
    $pupdate->update();
    return redirect('/pincode')->with('status','Pincode Update Successfully');

}
public function pincode()
    {
        $pincode=PincodeModel::all();
        return view('adminpanel.pincode',compact('pincode'));

    }


    public function myorders()
    {
        $myorders=CheckoutModel::all();
        return view('adminpanel.menu',compact('myorders'));

    }  

    public function orderview($id)
    {
        $vieworderdetail=AddtocartModel::where(['billno'=>$id])->get();
        $totalprice=CheckoutModel::where(['billno'=>$id])->get();
        return view('adminpanel.orderview',compact('vieworderdetail'));

    }

    public function admin_bill($id)
    {
        $viewbill=CheckoutModel::where(['billno'=>$id])->get();
        $cust1=AddtocartModel::where('billno',$id)->get();
        return view('adminpanel.admin_bill',compact('viewbill','cust1'));

    }

    public function inquiryview()
    {
        $inquiryview=InquiryModel::all(); //customerview
        return view('adminpanel.inquiryview',compact('inquiryview'));
    }

    //color

    public function color()
    {
        $color=ColorModel::all();
        return view('adminpanel.color',compact('color'));

    }

    public function Insertcolor(Request $request)
    {

$validation=$request->validate([
    'color'=>'required|max:15'
]);

        $s=new ColorModel;
        $s->color=$request->input('color');
       
        $s->save();
        return redirect('/color')->with('status','Color Added Successfully');

    }

    public function destroycolor($id)
{
    $pdelete=ColorModel::find($id);
    $pdelete->delete();
    return redirect('/color');
}
public function editcolor($id)
{
    $pedit=ColorModel::find($id);
    return view('/adminpanel.edit2  ',compact('pedit'));

}
public function Updatecolor(Request $request,$id)
{
    $pupdate=ColorModel::find($id);
    $pupdate->color=$request->input('color');
    $pupdate->update();
    return redirect('/color')->with('status','Color Update Successfully');

}



//Size

public function size()
{
    $color=SizeModel::all();
    return view('adminpanel.size',compact('color'));

}

public function Insertsize(Request $request)
{

$validation=$request->validate([
'size'=>'required|max:15'
]);

    $s=new SizeModel;
    $s->size=$request->input('size');
   
    $s->save();
    return redirect('/size')->with('status','Size Added Successfully');

}

public function destroysize($id)
{
$pdelete=SizeModel::find($id);
$pdelete->delete();
return redirect('/size');
}
public function editsize($id)
{
$pedit=SizeModel::find($id);
return view('/adminpanel.edit1',compact('pedit'));

}
public function Updatesize(Request $request,$id)
{
$pupdate=SizeModel::find($id);
$pupdate->size=$request->input('size');
$pupdate->update();
return redirect('/size')->with('status','Size Update Successfully');

}

public function vieworderdetail1($id)
{
    $vieworderdetail=AddtocartModel::where(['id'=>$id])->get();
    return view('adminpanel.viewfeedback1',compact('vieworderdetail'));

}

public function editproductentry($id)
    {
        $pedit=ProductEntryModel::find($id);
        return view('/adminpanel.editproductentry',compact('pedit'));
    
    }

    public function Updateproductentry(Request $request,$id)
{
    $s=ProductEntryModel::find($id);
    $s->category=$request->input('category');
    $s->company=$request->input('company');
    $s->color=$request->input('color');
    $s->material=$request->input('material');
    $s->description=$request->input('description');
    $s->size=$request->input('size'); 


    $file = $request ->file('image');
    $extenstion = $file ->getClientOriginalExtension();
    $filename =rand(11111, 99999).'.'.$extenstion;
    $file->move('image_upload/',$filename);
    $s-> image =$filename;


    $file1 = $request ->file('image1');
    $extenstion1 = $file ->getClientOriginalExtension();
    $filename1 =rand(11111, 99999).'.'.$extenstion1;
    $file1->move('image_upload/',$filename1);
    $s-> image1 =$filename1;


    $file2 = $request ->file('image2');
    $extenstion2 = $file ->getClientOriginalExtension();
    $filename2 =rand(11111, 99999).'.'.$extenstion2;
    $file2->move('image_upload/',$filename2);
    $s-> image2 =$filename2;


    $file3 = $request ->file('image3');
    $extenstion3= $file ->getClientOriginalExtension();
    $filename3 =rand(11111, 99999).'.'.$extenstion3;
    $file3->move('image_upload/',$filename3);
    $s-> image3 =$filename3;


    $file4 = $request ->file('image4');
    $extenstion4 = $file ->getClientOriginalExtension();
    $filename4 =rand(11111, 99999).'.'.$extenstion4;
    $file4->move('image_upload/',$filename4);
    $s-> image4 =$filename4;

    $s->price=$request->input('price');
    $s->update();
    return redirect('/productentryview')->with('status','Product Update Successfully');
    

}

public function viewcontact()
{
    $viewcontact=CustomerContactModel::all();
    return view('adminpanel.viewcontactus',compact('viewcontact'));

}

static function CustomerRegModel()
{

    return CustomerRegModel::all()->count();

}
static function orders()
{

    return CheckoutModel::all()->count();

}
static function products()
{

    return ProductEntryModel::all()->count();

}


public function del($id)
{
    $pdelete=CustomerContactModel::find($id);
    $pdelete->delete();
    return redirect('/viewcontactus');
}

public function del1($id)
{
    $pdelete=InquiryModel::find($id);
    $pdelete->delete();
    return redirect('/inquiryview');
}

//customerreply
public function reply($id)
{
$pedit=CustomerContactModel::find($id);
return view('/adminpanel.reply',compact('pedit'));

}
public function Updatereply(Request $request,$id)
{
$pupdate=CustomerContactModel::find($id);
$pupdate->reply=$request->input('reply');
$pupdate->update();
return redirect('/viewcontactus')->with('status','Inquiry reply added Successfully..!');

}

public function viewreply($id)
{
    $viewreply=CustomerContactModel::where(['id'=>$id])->get();
    return view('adminpanel.viewreply',compact('viewreply'));

}



}

