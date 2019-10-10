<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', 'HelloController@index');
