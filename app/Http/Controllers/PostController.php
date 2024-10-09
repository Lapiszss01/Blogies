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

        return view('blog', compact('posts'));
    }
}
