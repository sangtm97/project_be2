<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function index()
    {
        return view('productDetail', ['title' => 'Product Detail']);
    }
}