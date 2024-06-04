<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLoginModel;
use App\Models\CustomerRegModel;
use Session;

class AdminloginController extends Controller
{
  
    public function login()
    {

        return view('userpanel.login');

    }
    public function check(Request $request)
    {
        if($request->user=="admin")
        {
            $data=AdminLoginModel::where(['email'=>$request->email,'pass'=>$request->pass])->first();
            if($data)
            {
                $request->session()->put('AdminLoginId',$data);
                return redirect('/adminindex');

            }
            else
            {
                return back()->with('fail','Invalid Email Id & Password');
            }
        }
    
        elseif($request->user=="customer")
        {
            $data=CustomerRegModel::where(['email'=>$request->email,'pass'=>$request->pass])->first();
            if($data)
            {
                $request->session()->put('CustomerLoginId',$data);
                return redirect('/customerindex');

            }
            else
            {
                return back()->with('fail','Invalid Email Id & Password');
            }
        }
    
        
    }
        public function AdminLogout(Request $request){
            Session::Forget('AdminLoginId');
            return redirect ('/index');

        }
        public function UserLogout(Request $request){
            Session::Forget('CustomerLoginId');
            return redirect ('/index');

        }


}


