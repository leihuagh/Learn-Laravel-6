<?php

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/hello/{name}', 'HelloController@index')->name('hello');

Route::get('/about-us', function () {
    return 'About us page';
})->name('about.us');

Route::get('/pages/{name}', 'HomeController@page')->name('pages');

Route::get('/products/{url}', function ($url) {
    return $url . "page details";
})->name('products');

Route::get('/categories/{url?}', function ($url = null) {
    return $url == null ? 'list all categories' : "display $url category";
})->name('categories');

Route::get('/admin', function () {
    return 'admin dashboard';
})->middleware('before');

Route::get('/analytics', function () {
    return 'analytics dashboard';
})->middleware('after');

Route::get('/statistics', function () {
    return 'statistics dashboard';
})->middleware('before', 'after');

Route::get('/store', function () {
    return redirect('admin');
});

Route::get('blog/{url}', 'ShowBlogPostController');
