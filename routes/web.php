<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    //return 'Inicio';
    return view('welcome');
});*/

/*Route::match(['put','patch'],'/',function(){
   return 'This is a PUT/PATCH request';
});*/

Route::view('/', 'welcome');
Route::view('contacto', 'contact');
Route::view('blog', 'blog');
Route::view('nosotros', 'about');
