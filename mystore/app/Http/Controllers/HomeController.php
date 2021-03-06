<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('before');
        $this->middleware('after')->only('index');
    }

    public function index(Request $request)
    {
        return 'home page';
    }

    public function page(Request $request, $url)
    {
        return $url . " page";
    }
}
