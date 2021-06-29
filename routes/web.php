<?php

use App\Http\Controllers\{AgendamentoController};
use App\Http\Controllers\{OrcamentoController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.site.examples.login');
});

Route::post('/');
Route::get('/site/examples/login',[AgendamentoController::class,'login'])->name('site.login');
Route::get('/site/examples/dashboard',[AgendamentoController::class,'dashboard'])->name('site.dashboard');
Route::get('/site/examples/orcamento',[AgendamentoController::class,'orcamento'])->name('site.orcamento');
Route::get('/site/examples/agendamento',[AgendamentoController::class,'agendamento'])->name('site.agendamento');
Route::post('/site/examples', [AgendamentoController::class, 'store'])->name('site.store');
Route::get('/site/examples/meusservicos',[AgendamentoController::class,'meusservicos'])->name('site.meusservicos');
Route::get('site/examples/listagenda',[AgendamentoController::class,'listagenda'])->name('site.listagenda');
Route::delete('site/examples/listagenda/{id}',[AgendamentoController::class, 'destroy'])->name('site.destroy');
Route::put('site/examples/editagenda/{id}',[AgendamentoController::class,'update'])->name('site.update');
Route::get('site/examples/editagenda/{id}', [AgendamentoController::class, 'editagenda'])->name('site.editagenda');

Route::post('/site/examples/orcamento', [OrcamentoController::class, 'storeOrca'])->name('site.storeOrca');
Route::get('site/examples/listaorcamento',[OrcamentoController::class,'listaorcamento'])->name('site.listaorcamento');
Route::delete('site/examples/listorcamento/{id}',[OrcamentoController::class, 'destroyorcamento'])->name('site.destroyorcamento');
Route::put('site/examples/editaorcamento/{id}',[OrcamentoController::class,'update'])->name('site.updateorcamento');
Route::get('site/examples/editaorcamento/{id}', [OrcamentoController::class, 'editaorcamento'])->name('site.editaorcamento');