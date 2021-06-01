@if(session('message'))
    <p>{{session('message')}} </p>
@endif

<h1>Comentários</h1> 
@foreach($posts as $post)
    <p><b>{{$post->title}}</b><p><br>
    <p>{{$post->content}}<p><br>
    <a href="{{route('posts.show',$post->id)}}">View</a>
    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>        
    </form>
    

    -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-   
@endforeach
<a href="{{ route('posts.create') }}">Add</a>
