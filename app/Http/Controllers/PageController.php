<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function login(){
        return view('admin.site.examples.login');
    }
    public function dashboard(){
        return view('admin.site.examples.dashboard');
    }
    public function icons(){
        return view('admin.site.examples.icons');
    }
    
}
