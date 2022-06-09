<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService
{
    public function create($request){
        try {
            Product::create([
                'product_name' => (string)$request->input('product_name')
            ]);
            Session::flash('success','Create product success');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
