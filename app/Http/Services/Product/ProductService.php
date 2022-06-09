<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService
{
    public function create($request){
        try {
            Product::create([
                'product_name' => (string)$request->input('product_name'),
                'product_price' => (integer)$request->input('product_price'),
                'product_description' => (string)$request->input('product_description'),
                'endow_id' => (integer)$request->input('endow_id'),
                'product_image' => (string)$request->input('product_image'),
            ]);
            Session::flash('success','Create category success');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
