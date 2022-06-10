<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

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


    public function search(Request $request){
        $search = $request->get('search');
        $products = Product::where('product_name', 'like', '%' .$search. '%')->paginate(50);
        return view('searchproduct',[
            'title'=>'Result Search Product'], compact('products'));
    }

}
