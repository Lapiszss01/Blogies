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

Route::view('/', 'welcome')->name('home');
Route::view('contacto', 'contact')->name('contact');
Route::view('nosotros', 'about')->name('about');

//Al tener un solo métdo el PostController no hay que especificar el nombre del métdo
Route::get('blog', PostController::class)->name('blog');
