<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

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
    public function store(Request $request){
        $pages= Page::agendamento($request->all());
        return ok;
    }    
    
    public function meusservicos(){
        return view('admin.site.examples.meusservicos');
    }
}