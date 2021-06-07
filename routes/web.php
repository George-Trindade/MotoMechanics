<?php

use App\Http\Controllers\{AgendaController};
use Illuminate\Support\Facades\Route;
/*
Route::put('/posts/edit/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');  
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); 
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::delete('/posts/{id}',[PostController::class, 'destroy'])->name('posts.destroy');
*/
Route::get('/', function () {
    return view('admin.site.examples.login');
});

Route::post('/');
Route::get('/site/examples/login',[AgendaController::class,'login'])->name('site.login');
Route::get('/site/examples/dashboard',[AgendaController::class,'dashboard'])->name('site.dashboard');
Route::get('/site/examples/orcamento',[AgendaController::class,'orcamento'])->name('site.orcamento');
Route::get('/site/examples/agendamento',[AgendaController::class,'agendamento'])->name('site.agendamento');
Route::post('/site/examples', [AgendaController::class, 'store'])->name('site.store');
Route::get('/site/examples/meusservicos',[AgendaController::class,'meusservicos'])->name('site.meusservicos');
Route::get('site/examples/listagenda',[AgendaController::class,'listagenda'])->name('site.listagenda');
Route::delete('site/examples/listagenda/{id}',[AgendaController::class, 'destroy'])->name('site.destroy');
Route::put('site/examples/editagenda/{id}',[AgendaController::class,'update'])->name('site.update');
Route::get('site/examples/editagenda/{id}', [AgendaController::class, 'editagenda'])->name('site.editagenda');
