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
        //dd($request->all());
    }

    //edit category
    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('admin.category.edit',[
            'title'=>'Edit Category'],
            compact('categories')
        );
    }

    //update category
    public function update(UpdateFormRequest $request, $id){
        $categories = Category::findOrFail($id);
        $categories->category_name = $request->input('category_name');
        $categories->update();
        return redirect()->route('list')->with(['message' => 'Update categoty Success']);
    }


    public function list(){
        $categories = Category::latest('id')->paginate(50);
        return view('admin.category.list',[
            'title'=>'List Category'],
            compact('categories')
        );
    }

    // Delete
    public function destroy($id){
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('list')->with(['message' => 'Delete category success']);
    }

    public function search(Request $request){
        // $search = $request->get('search');
        // $categories = DB::table('categories')->where('category_name', 'like', '%' .$search. '%');
        // return view('admin.category.list', ['categories' => $categories]);
        $search = $request->get('search');
        $categories = Category::where('category_name', 'like', '%' .$search. '%')->paginate(50);
        return view('admin.category.search',[
            'title'=>'Result Search Category'], compact('categories'));
    }
}
