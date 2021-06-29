<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Agendamento;
use App\Models\Veiculo;


class AgendamentoController extends Controller
{
    
    public function orcamento(){
        $veiculos= Veiculo::get();
        return view('admin.site.examples.orcamento',compact('veiculos'));
    }
    public function agendamento(){
        $veiculos= Veiculo::get();
        return view('admin.site.examples.agendamento',compact('veiculos'));
        
    }
    public function store(Request $request){
        $agendamento= Agendamento::create($request->all());
        return redirect()->route('site.listagenda');
    }    
    public function meusservicos(){
        return view('admin.site.examples.meusservicos');
    }
    public function listagenda(){
        $veiculos= Veiculo::get();
        $agendamentos = Agendamento::get();
        //dd($veiculos);
        //dd($agendamentos);
        return view('admin.site.examples.listagenda', compact('agendamentos','veiculos'));
    }
    public function destroy($id){
        $agendamento = Agendamento::find($id);
        $agendamento->delete();
        return redirect()->route('site.listagenda');
    }
    public function editagenda($id){
        $veiculos= Veiculo::get();
        $agendamento= Agendamento::find($id);
        if(!$agendamento){
            return redirect()->route('site.listagenda');
        }
        return view('admin.site.examples.editagenda',compact('agendamento','veiculos'));
    }
    public function update(StoreUpdatePost $request,$id){
        $agendamento= Agendamento::find($id);
        if(!$agendamento){
            return redirect()->back();
        }
        $agendamento->update($request->all());
        return redirect()
        ->route('site.listagenda')
        ->with('message','Alterado com Sucesso!');
    }
}
