<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index () {
        return view('products.index');
    }

    function show () {
        return view('products.show');
    }
}
