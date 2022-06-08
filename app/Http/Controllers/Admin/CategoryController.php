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
            'title' => 'Add New Category'
        ]);
    }

    public function store(CategoryCreateFormRequest $request){
        $result = $this->categoryService->create($request);
        return redirect()->back();
    }

    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('admin.category.edit',[
            'title'=>'Edit Category'],
            compact('categories')
        );
    }
    
    public function update(UpdateFormRequest $request, $id){
        $categories = Category::findOrFail($id);
        $categories->category_name = $request->input('category_name');
        $categories->update();
        return redirect()->route('list')->with(['message' => 'Success']);
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
}
