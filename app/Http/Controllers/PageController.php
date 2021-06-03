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
    public function orcamento(){
        return view('admin.site.examples.orcamento');
    }
    public function agendamento(){
        return view('admin.site.examples.agendamento');
    }
    
}
