<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Si hay rutas que piden parámetros hay que ponerlo al final siempre
//Siempre agregar cuando se haga un post @csrf en el formulario que queramos enviar

/*Route::get('/', function () {
    //return 'Inicio';
    return view('welcome');
});*/

/*Route::match(['put','patch'],'/',function(){
   return 'This is a PUT/PATCH request';
});*/

//Ruta inicial al welcome.blade
Route::view('/', 'welcome')->name('home');

Route::view('contacto', 'contact')->name('contact');
Route::view('nosotros', 'about')->name('about');

//Rutas de los POSTS
Route::get('blog', [PostController::class,'index'])->name('posts.index');
Route::get('blog/create}', [PostController::class,'create'])->name('posts.create');
Route::post('blog', [PostController::class,'store'])->name('posts.store');
Route::get('blog/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('blog/{post}/edit', [PostController::class,'edit'])->name('posts.edit');


