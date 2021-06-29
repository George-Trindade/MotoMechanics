<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login(){
        return view('admin.site.examples.login');

    }
    public function dashboard(){
        //if(Auth::check()===true)
        //{
           return view('admin.site.examples.dashboard');
        //}
       // return redirect()->route('admin.site.examples.login');
    }
    public function loginuser(Request $request){
        return view('admin.site.examples.dashboard');

        if(Auth::attempt(['email'=> $request->email,'password'=>$request->password])){
            
        }else{
            
        }
    }
}
