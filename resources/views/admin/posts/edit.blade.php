<h1>Alterar Postagem {{ $posts->title}}</h1>
@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    
    </ul>
@endif


<form action="{{route('posts.update',$posts->id)}}" method="post">
    @method("put")
    @csrf
    <input type="text" name="title" id="title" value="{{$posts->title}}">
    <textarea name="content" id="content" cols="25" rows="5">{{$posts->content}}
    </textarea>
    <button type="submit">Enviar</button> 
</form>