<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist', [
            'title' => 'Wishlist',
        ]);

    }
}