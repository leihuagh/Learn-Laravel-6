<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hello/{name}', 'HelloController@index')->name('hello');

Route::get('/about-us', function () {
    return 'About us page';
})->name('about.us');

Route::get('/pages/{name}', function ($name) {
    return "$name page";
})->name('pages');

Route::get('/products/{url}', function ($url) {
    return $url . "page details";
})->name('products');

Route::get('/categories/{url?}', function ($url = null) {
    return $url == null ? 'list all categories' : "display $url category";
})->name('categories');
