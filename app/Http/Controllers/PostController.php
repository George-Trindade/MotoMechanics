<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(StoreUpdatePost $request){
        $posts= Post::create($request->all());
        return redirect()->route('posts.index');
    }
    public function show($id){
        $posts= Post::find($id);
        if(!$posts){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show',compact('posts'));
    }
    public function destroy($id){
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->route('posts.index');
    }
    public function edit($id){
        $posts= Post::find($id);
        if(!$posts){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.edit',compact('posts'));
    }
    public function update(StoreUpdatePost $request,$id){
        $posts= Post::find($id);
        if(!$posts){
            return redirect()->back();
        }
        $posts->update($request->all());
        return redirect()
        ->route('posts.index')
        ->with('message','Alterado com Sucesso!');
    }
}
