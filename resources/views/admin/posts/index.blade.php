<h1>Comentários</h1>
@foreach($posts as $post)
<p>{{$post->title}}</p>
<p><b>{{$post->content}}</b></p>
@endforeach
