<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Home'
        ]);

    }
}
