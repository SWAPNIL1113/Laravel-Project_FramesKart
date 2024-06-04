<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRegController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CustomerPanelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('userpanel.index');
});

Route::get('/about', function () {
    return view('adminpanel.about');
});

Route::get('/demo', function () {
    return view('userpanel.demo');
});
Route::get('/admindemo', function () {
    return view('adminpanel.admindemo');
});
Route::get('/login', function () {
    return view('userpanel.login');
});
Route::get('/register', [CustomerRegController::class,'register']);

Route::post('insertdata', [CustomerRegController::class,'insertdata']);   //insert

//admin login
Route::get('/login', [AdminLoginController::class,'login']);

Route::post('/admin_check', [AdminLoginController::class,'check']);

Route::middleware( ['admin_login'])->group(function()
{
    Route::get('/adminindex',function()
    {
        return view('adminpanel.adminindex');
    });
});

Route::middleware( ['customer_login'])->group(function()
{
    Route::get('/customerindex',function()
    {
        return view('customerpanel.customerindex');
    });
});
//customer penal    

//Route::get('/customerindex', function () {
  //  return view('customerpanel.customerindex');
//});





Route::middleware(['customer_login'])->group(function()
{
    Route::get('/customerindex',function()
    {
        return view('customerpanel.customerindex');
    });
});

Route::get('/admin_logout', [AdminloginController::class,'AdminLogout']);

Route::get('/user_logout', [AdminloginController::class,'UserLogout']);


Route::get('/product', [AdminPanelController::class,'product']);

Route::post('/insertproduct', [AdminPanelController::class,'insertproduct']);

Route::get('/deleteproduct/{id}', [AdminPanelController::class,'destroy']);

Route::get('editproduct/{id}', [AdminPanelController::class,'edit']);

Route::put('Updatedata/{id}', [AdminPanelController::class,'Update']);


Route::get('/viewcustomer', function () {
    return view('adminpanel.viewcustomer');
});

Route::get('/viewcustomer', [AdminPanelController::class,'viewcustomer']);

Route::get('/deletecustomer/{id}', [AdminPanelController::class,'destroy1']);


Route::get('/productentry', function () {
    return view('adminpanel.productentry');
});

Route::get('/productentry', [AdminPanelController::class,'productentrydropdown']);

Route::post('/productentry', [AdminPanelController::class,'productentry']);

Route::get('/productentryview', [AdminPanelController::class,'insertproductentry']);

Route::get('/deleteproductentry/{id}', [AdminPanelController::class,'destroy_entry']);

Route::get('/profileview', function () {
    return view('customerpanel.profileview');
});

Route::get('/profileview', [CustomerPanelController::class,'profileview']);


//profileedit

Route::get('editprofile/{id}', [CustomerPanelController::class,'editprofile']);

Route::put('Updateprofile/{id}', [CustomerPanelController::class,'Updateprofile']);

Route::get('/customerpanel', [AdminPanelController::class,'productdropdown']);

Route::get('/customerindex', [CustomerPanelController::class,'productentrycustdropdwon']);

Route::get('/products', [CustomerPanelController::class,'productview']);

Route::get('/viewdetail/{id}', [CustomerPanelController::class,'viewdetail']);

Route::post('/addtocart', [CustomerPanelController::class,'addtocart']);


Route::get('/cart', function () {
    return view('customerpanel.cart');
});

Route::get('/cart', [CustomerPanelController::class,'cart']);

Route::get('/viewdetail1/{id}', [CustomerPanelController::class,'viewdetail1']);

//quntity update

Route::get('qty/{id}', [CustomerPanelController::class,'edit2']);

Route::put('updatedata2/{id}', [CustomerPanelController::class,'update2']);

Route::get('/deleteaddtocart/{id}', [CustomerPanelController::class,'destroycart']);

//pincode


Route::get('/pincode', [AdminPanelController::class,'pincode']);

Route::post('/insertpincode', [AdminPanelController::class,'insertpincode']);

Route::get('/deletepincode/{id}', [AdminPanelController::class,'destroy3']);

Route::get('editpincode/{id}', [AdminPanelController::class,'edit3']);

Route::put('Updatepincode/{id}', [AdminPanelController::class,'update3']);

Route::post('/checkoutinsertdata', [CustomerPanelController::class,'checkoutinsertdata']);

Route::get('/myorders', [CustomerPanelController::class,'myorders']);

Route::get('vieworderdetail/{id}', [CustomerPanelController::class,'vieworderdetail']);

Route::get('/bill/{id}', [CustomerPanelController::class,'bill']);

Route::get('/bill_pdf/{id}', [CustomerPanelController::class,'invoice_pdf']);

Route::get('/menu', [AdminPanelController::class,'myorders']);

Route::get('orderview/{id}', [AdminPanelController::class,'orderview']);

Route::get('/admin_bill/{id}', [AdminPanelController::class,'admin_bill']);

Route::get('/user_products', [CustomerPanelController::class,'productview1']);

Route::get('/viewdetail2/{id}', [CustomerPanelController::class,'viewdetail2']);

Route::get('feedback/{id}', [CustomerPanelController::class,'feedback']);

Route::put('feedbackinsert/{id}', [CustomerPanelController::class,'feedbackinsert']);

Route::get('viewfeedback/{id}', [CustomerPanelController::class,'vieworderdetail1']);

//inquire

Route::get('/inquiry',[CustomerPanelController::class,'inquiry']);

Route::post('insertinquiry',[CustomerPanelController::class,'insertinquiry']);

Route::get('/inquiryview',[AdminPanelController::class,'inquiryview']);


//color

Route::get('/color', [AdminPanelController::class,'color']);

Route::post('/insertcolor', [AdminPanelController::class,'insertcolor']);

Route::get('/deletecolor/{id}', [AdminPanelController::class,'destroycolor']);

Route::get('editcolor/{id}', [AdminPanelController::class,'editcolor']);

Route::put('Updatecolor/{id}', [AdminPanelController::class,'Updatecolor']);


//size

Route::get('/size', [AdminPanelController::class,'size']);

Route::post('/insertsize', [AdminPanelController::class,'insertsize']);

Route::get('/deletesize/{id}', [AdminPanelController::class,'destroysize']);

Route::get('editsize/{id}', [AdminPanelController::class,'editsize']);

Route::put('Updatesize/{id}', [AdminPanelController::class,'Updatesize']);

Route::get('viewfeedback1/{id}', [AdminPanelController::class,'vieworderdetail1']);

//editproductentry
Route::get('editproductentry/{id}', [AdminPanelController::class,'editproductentry']);

Route::put('Updateproductentry/{id}', [AdminPanelController::class,'Updateproductentry']);

Route::get('/contactus',[CustomerPanelController::class,'contactus']);

Route::post('contact',[CustomerPanelController::class,'contact']);


Route::get('/viewcontactus', [AdminPanelController::class,'viewcontact']);

//delete contact us

Route::get('/deletecontact/{id}', [AdminPanelController::class,'del']);

Route::get('/deletecontact1/{id}', [AdminPanelController::class,'del1']);

//Customer side reply

Route::get('editreply/{id}', [AdminPanelController::class,'reply']);

Route::put('Updatereply/{id}', [AdminPanelController::class,'Updatereply']);

Route::get('viewreply/{id}', [AdminPanelController::class,'viewreply']);

//admin side

Route::get('adminreply', [CustomerPanelController::class,'adminreply']);

Route::get('viewreply1/{id}', [CustomerPanelController::class,'viewreply1']);

Route::get('/deletefeedback/{id}', [AdminPanelController::class,'deletefeedback']);

Route::get('/index', [CustomerPanelController::class,'categorydropdown']);

Route::get('/category/{id}', [CustomerPanelController::class,'category']);

