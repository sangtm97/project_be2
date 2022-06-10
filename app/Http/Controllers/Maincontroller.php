<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $bestsellers = DB::table('products')->where('endow_id', '=', 1)->orderBy('updated_at', 'DESC')->get();
        $recommendeds = DB::table('products')->where('endow_id', '=', 2)->orderBy('updated_at', 'DESC')->get();
        $products = DB::table('products')->get();
        return view('home', compact('bestsellers', 'recommendeds', 'products'));
        //return dd($bestsellers);
    }

}
=======
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
        return view('home', [
            'title' => 'Home'
        ]);

    }
}
>>>>>>> 7-dung/module16-related-products
