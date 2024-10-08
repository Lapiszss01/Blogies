<?php

namespace App\Http\Controllers;

class PostController
{
    //Si se le llama a la funcion __invoke no hace falta escribir el nombre en las rutas
    public function __invoke()
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
