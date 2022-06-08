<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryService
{
    public function create($request){
        try {
            Category::create([
                'category_name' => (string)$request->input('category_name')
            ]);
            Session::flash('success','Tạo danh mục thành công');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
