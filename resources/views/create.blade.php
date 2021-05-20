@extends('layouts.app',['title' => 'Creation d\'article'])

@section('content')
    <h1>Ajout d' article : "</h1>
    <div>
        <form action="{{route('store')}}" method="POST">
            @csrf
        <div>
            <label for="title">titre</label><br>
            <input type="text" name="title" id="title" class="border-gray-600 border-2">
            {{$errors->title}}
        </div>    
        <div>
            <label for="content">content</label><br>
            <textarea name="content" id="content" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
            {{$errors->content}}
        </div>
            <div>
                <button type="submit" class="bg-green-500">Validez</button>
            </div>
        </form>
    </div>
    <hr>
@stop