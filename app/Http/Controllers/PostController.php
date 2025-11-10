<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
        $data = [
            'title' => $request->title,
             'content'=> $request->content,
        ];
        Post::create($data);

        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $data = [
            'title' => $request->title,
             'content'=> $request->content,
        ];
        $post->update($data);

        return redirect('/posts/' . $post->id);
    }

    public function destroy($id)
    {
       $post =  Post::find($id);
        $post->delete();
        return redirect('/posts/');
    }
}
