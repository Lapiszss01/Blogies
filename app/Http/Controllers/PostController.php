<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Aqui si tiene nombre de funcion ya que vamos a tener más de una
    public function index()
    {
        //Al ser méodo estático se pueden usar con ::get()
        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        //El compact(post) es equivalente a pasarle un parametro post siempre que sea el nombre del modelo
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post creado');

        //Al hacer redirect en vez de pasar directamente la view se vuelve a ejecutar el Postcontroller
        //return redirect()->route('posts.index');
        //Equivalente a lo de arriba
        return to_route('posts.index');
    }
}
