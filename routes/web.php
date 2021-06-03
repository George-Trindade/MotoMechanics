<?php

use App\Http\Controllers\{
    PostController,
    PageController};
use Illuminate\Support\Facades\Route;

Route::put('/posts/edit/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');  
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); 
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::delete('/posts/{id}',[PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/');
Route::get('/site/examples/login',[PageController::class,'login'])->name('site.login');
Route::get('/site/examples/dashboard',[PageController::class,'dashboard'])->name('site.dashboard');
Route::get('/site/examples/orcamento',[PageController::class,'orcamento'])->name('site.orcamento');
Route::get('/site/examples/agendamento',[PageController::class,'agendamento'])->name('site.agendamento');

