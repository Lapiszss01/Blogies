<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

//LLamamos al controlador y entre comillas el nombre de la funcion:
Route::get('blog', [PostController::class,'index'])->name('posts.index');
Route::get('blog/{post}', [PostController::class,'show'])->name('posts.show');

