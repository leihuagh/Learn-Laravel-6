<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request, $name)
    {
        $data = [
            'name' => $name
        ];
        return view('hello', $data);
    }
}
