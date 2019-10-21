<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function () {
    $products = [
        [
            'name' => 'Macbook Pro',
            'price' => 2500
        ],
        [
            'name' => 'iPhone',
            'price' => 1200
        ]
    ];

    return response()->json($products);
});

Route::apiResource('brands', 'API\BrandController');
