<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('articles',
                [
                    'posts' => $posts,
                ]
    );
    }
    public  function show($id)
    {
        $post = Post::findOrfail($id);

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact(){
        return view('contact');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $post = new Post;
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:5'
        ]);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('articles');
    }
}
