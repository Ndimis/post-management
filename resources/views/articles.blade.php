@extends('layouts.app', ['title' => 'List des articles'])

@section('content')
    <h1>Liste des articles</h1>
    @foreach($posts as $post)
    <h2><a href="{{route('show',['id' => $post->id])}}">{{$post->title}}</a></h2>
    <hr>
    @endforeach
@stop