<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    //Aqui si tiene nombre de funcion ya que vamos a tener más de una
    public function index()
    {
        $posts = [
            ['title' => 'Post 1'],
            ['title' => 'Post 2'],
            ['title' => 'Post 3'],
            ['title' => 'Post 4'],
        ];
        return view('blog', compact('posts'));
    }
}
