<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    //return ('this is about page');
    return view('about');
});
Route::get('/product', function(){
    //return ('this is the product page');
    return view('product', ['name' => 'Shoes']);
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('name/{name}', function($name){
    return 'My name is '.$name;
});





