<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
