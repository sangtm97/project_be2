<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateFormRequest;
use App\Http\Requests\Category\UpdateFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create(){
        return view('admin.category.add', [
            'title' => 'Thêm Danh Mục Mới'
        ]);
    }

    public function store(CategoryCreateFormRequest $request){
        $result = $this->categoryService->create($request);
        return redirect()->back();
    }

    //edit category
    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('admin.category.edit',[
            'title'=>'Update Category'],
            compact('categories')
        );
    }

    //update category
    public function update(UpdateFormRequest $request, $id){
        $categories = Category::findOrFail($id);
        $categories->category_name = $request->input('category_name');
        $categories->update();
        return redirect()->route('list')->with(['message' => 'Update category success']);
    }


    public function list(){
        $categories = Category::latest('id')->paginate(50);
        return view('admin.category.list',[
            'title'=>'List Category'],
            compact('categories')
        );
    }

    public function destroy($id){
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('list')->with(['message' => 'Success']);
    }
//    public function update($request, $menu):bool{
////        $menu->category_name = (string)$request->input('category_name');
////        $menu->save();
////         Session::flash('success','Cập nhật thành công');
////         return true;
////        try {
////            Category::update([
////                'category_name' => (string)$request->input('category_name')
////            ]);
////            $menu->save();
////            Session::flash('success','Tạo danh mục thành công');
////        }catch (\Exception $err){
////            Session::flash('error', $err->getMessage());
////            return false;
////        }
////        return true;
//    }


}
