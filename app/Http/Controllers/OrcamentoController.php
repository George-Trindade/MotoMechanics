<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Orcamento;
use App\Models\Veiculo;
class OrcamentoController extends Controller
{
    
    public function storeOrca(Request $request){
        $orcamento= Orcamento::create($request->all());
        return redirect()->route('site.meusservicos');
    }    
    public function meusservicos(){
        return view('admin.site.examples.meusservicos');
    }
    public function listaorcamento(){
        $veiculos= Veiculo::get();
        $orcamentos = Orcamento::get();
       
        return view('admin.site.examples.listaorcamento', compact('orcamentos','veiculos'));
    }
    public function destroyorcamento($id){
        $orcamento = Orcamento::find($id);
        $orcamento->delete();
        return redirect()->route('site.meusservicos');
    }
    public function editaorcamento($id){
        $orcamento= Orcamento::find($id);
        if(!$orcamento){
            return redirect()->route('site.meusservicos');
        }
        return view('admin.site.examples.editaorcamento',compact('orcamento'));
    }
    public function update(StoreUpdatePost $request,$id){
        $orcamento= Orcamento::find($id);
        if(!$orcamento){
            return redirect()->back();
        }
        $orcamento->update($request->all());
        return redirect()
        ->route('site.listaorcamento')
        ->with('message','Alterado com Sucesso!');
    }
}
