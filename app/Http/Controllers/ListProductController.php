<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function index(){
        return view('listproduct', [
            'title' => 'List Product'
        ]);

    }
}
