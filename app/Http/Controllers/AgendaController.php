<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agenda;


class AgendaController extends Controller
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
        $agendas= Agenda::create($request->all());
        return 'ok';
    }    
    
    public function meusservicos(){
        return view('admin.site.examples.meusservicos');
    }
}

