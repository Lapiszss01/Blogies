<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //Aqui si tiene nombre de funcion ya que vamos a tener más de una
    public function index()
    {
        //La clase DB de Facades nos permite acceder directamente a la db configurada en el .env
        $posts = DB::table('posts')->get();

        return view('blog', compact('posts'));
    }
}
