<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', 'HelloController@index');

Route::get('/about-us', function () {
    return 'About us page';
});
