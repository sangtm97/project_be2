<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $bestsellers = DB::table('products')->where('endow_id', '=', 1)->orderBy('updated_at', 'DESC')->get();
        $recommended = DB::table('products')->where('endow_id', '=', 2)->orderBy('updated_at', 'DESC')->get();
        return view('home', ['bestsellers' => $bestsellers, 'recommendeds' => $recommended]);
        //return dd($bestsellers);
    }

}