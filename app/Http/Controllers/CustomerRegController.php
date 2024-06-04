<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRegModel;
    
class CustomerRegController extends Controller
{
    public function register()
    {

        return view('userpanel.register');

    }

    public function insertdata(Request $request)
    {

        $email=$request->input('email');
        if(CustomerRegModel::where('email','=',$email)->count() > 0){

            return back()->with('fail','Email Alredy Exists');
        }
        else{

            $validation=$request->validate([
                'name'=>'required|max:20',
                'address'=>'required|max:100|min:20',
                'city'=>'required|max:50',
                'mobile'=>'required|max:10',
                'dob'=>'required|before:10/19/2004',
                'email'=>'required|max:50|email',
                'pass'=>'required|max:8|confirmed|min:4',
                'pass_confirmation'=>'required'
            ]);
    
            $s=new CustomerRegModel;
            $s->name=$request->input('name');
            $s->address=$request->input('address');
            $s->city=$request->input('city');
            $s->mobile=$request->input('mobile');
            $s->dob=$request->input('dob');
            $s->email=$request->input('email');
            $s->pass=$request->input('pass');
            $s->save();
            return redirect('/login')->with('status','Your account has been successfully created!');
    
        }

        }



    public function profile()
    {
        $id=Session::get('CustomerLogginId')['id'];
        $profile=CustomerRegModel::where('id',$id)->get();
        return view('customerpanel.profile',compact('profile'));
    }
    
}

        
