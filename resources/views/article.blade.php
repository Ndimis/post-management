@extends('layouts.app',['title' => 'Article'])

@section('content')
    <h1>Details sur l' article : "{{$post->title}}"</h1>
    <hr>
    <h2>Titre : {{ $post->title }}</h2>
    <hr>
    <p>{{ $post->content }}</p>
    <h4>Commentaires : </h4><hr>
    <span>{{$post->image ? $post->image->path : "Pas d'image"}}</span>
@forelse($post->comments as $comment)
    <span>{{$comment->content}} | créer en : {{$comment->created_at->format('Y')}}</span>
    <br>
@empty
    <span>Aucun commentaire pour ce post !</span>
@endforelse   
    <hr>
        @forelse($post->tags as $tag)
            <span>{{$tag->name}}</span>
        @empty
            <span>Pas de tags</span>
        @endforelse
    <hr>
@stop