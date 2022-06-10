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
use Mail;
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
        $name = 'test name for email';
        $products = Product::create([
            'product_name' => (string)$request->input('product_name'),
            'product_price' => (integer)$request->input('product_price'),
            'product_description' => (string)$request->input('product_description'),
            'endow_id' => (integer)$request->input('endow_id'),
            'product_image' => (string)$request->input('product_image'),
        ]);
        Mail::send('emails.test',compact('products','name'),function ($email){
            $email->to('phannhatquy.tdc2019@gmail.com','Phan Nhat Quy');
        });
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test_mail()
    {
        $name = 'test name for email';
        Mail::send('emails.test',compact('name'),function ($email){
            $email->to('phannhatquy.tdc2019@gmail.com','Phan Nhat Quy');
        });
    }
}
