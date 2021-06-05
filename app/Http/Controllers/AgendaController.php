<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
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
        return redirect()->route('site.listagenda');
    }    
    public function meusservicos(){
        return view('admin.site.examples.meusservicos');
    }
    public function listagenda(){
        $agendas = Agenda::get();
        return view('admin.site.examples.listagenda', compact('agendas'));
    }
    public function destroy($id){
        $agendas = Agenda::find($id);
        $agendas->delete();
        return redirect()->route('site.listagenda');
    }
    public function editagenda($id){
        $agendas= Agenda::find($id);
        if(!$agendas){
            return redirect()->route('site.listagenda');
        }
        return view('admin.site.examples.editagenda',compact('agendas'));
    }
    public function update(StoreUpdatePost $request,$id){
        $agendas= Agenda::find($id);
        if(!$agendas){
            return redirect()->back();
        }
        $agendas->update($request->all());
        return redirect()
        ->route('site.listagenda')
        ->with('message','Alterado com Sucesso!');
    }
}

