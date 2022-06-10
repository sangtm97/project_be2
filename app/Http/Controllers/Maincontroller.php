<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $bestsellers = DB::table('products')->where('endow_id', '=', 1)->orderBy('updated_at', 'DESC')->get();
        $recommendeds = DB::table('products')->where('endow_id', '=', 2)->orderBy('updated_at', 'DESC')->get();
        $limiteds = DB::table('products')->where('endow_id', '=', 3)->orderBy('updated_at', 'ASC')->get();
        $products = DB::table('products')->get();
        return view('home', compact('bestsellers', 'recommendeds', 'limiteds', 'products'));
        //return dd($bestsellers);
    }

}