<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductCreateFormRequest;
use App\Http\Requests\Product\UpdateFormRequest;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use App\Models\Product;
use App\Models\Endow;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cats = Endow::orderBy('endow_name', 'ASC')->select('id', 'endow_name')->get();
        return view('admin.product.add', compact('cats'),[
            'title' => 'Add New Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateFormRequest $request){
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'),$file_name);
        }
        $request->merge(['product_image' => $file_name]);
        $result = $this->productService->create($request);
        return redirect()->back();
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.product.edit',[
            'title'=>'Edit Product'],
            compact('products')
        );
    }

    public function update(\App\Http\Requests\Product\UpdateFormRequest $request, $id){
        $products = Product::findOrFail($id);
        $products->product_name = $request->input('product_name');
        $products->product_price = $request->input('product_price');
        $products->product_description = $request->input('product_description');
        $products->update();
        return redirect()->route('list')->with(['message' => 'Success']);
    }


    public function list(){
        $products = Product::paginate(7);
        return view('admin.product.list',[
            'title'=>'List Product'],
            compact('products')
        );
        // $products = Product::latest('id')->paginate(50);
        // return view('admin.product.list',[
        //     'title'=>'List Product'],
        //     compact('products')
        // );
    }


    public function destroy($id){
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('list')->with(['message' => 'Success']);
    }
}
