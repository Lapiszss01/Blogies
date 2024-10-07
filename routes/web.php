<?php

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
Route::get('blog', function () {
    $posts = [
        ['title' => 'Post 1'],
        ['title' => 'Post 2'],
        ['title' => 'Post 3'],
        ['title' => 'Post 4'],
    ];
    return view('blog', compact('posts'));
})->name('blog');
Route::view('nosotros', 'about')->name('about');
