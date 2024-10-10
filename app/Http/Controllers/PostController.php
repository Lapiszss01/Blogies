<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    //Aqui si tiene nombre de funcion ya que vamos a tener más de una
    public function index()
    {
        //Al ser méodo estático se pueden usar con ::get()
        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        //El compact(post) es equivalente a pasarle un parametro post siempre que sea el nombre del modelo
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return 'Post was created';
    }
}
