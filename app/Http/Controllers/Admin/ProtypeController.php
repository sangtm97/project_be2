<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Protype\ProtypeCreateFormRequest;
use App\Http\Requests\Protype\UpdateFormRequest;
use App\Models\Protype;
use Illuminate\Http\Request;
use App\Http\Services\Protype\ProtypeService;
use Mail;

class ProtypeController extends Controller
{
    protected $protypeService;

    public function __construct(ProtypeService $protypeService)
    {
        $this->protypeService = $protypeService;
    }
    // add protype
    public function create(){
        return view('admin.protype.add', [
            'title' => 'Add New Protype'
        ]);
    }

    public function store(ProtypeCreateFormRequest $request){
        $name = 'test name for email';
        Mail::send('admin.emails.test',compact('name'),function ($email){
            $email->to('phannhatquy.tdc2019@gmail.com','Phan Nhat Quy');
        });
        $result = $this->protypeService->create($request);
        return redirect()->back();
        
        
    }

    public function edit($id){
        $protypes = Protype::findOrFail($id);
        return view('admin.protype.edit',[
            'title'=>'Edit Protype'],
            compact('protypes')
        );
    }

    public function update(UpdateFormRequest $request, $id){
        $protypes = Protype::findOrFail($id);
        $protypes->protype_name = $request->input('protype_name');
        $protypes->update();
        return redirect()->route('listprotypes')->with(['message' => 'Success']);
    }


    public function listprotypes(){
        $protypes = Protype::latest('id')->paginate(50);
        return view('admin.protype.list',[
            'title'=>'List Protype'],
            compact('protypes')
        );
    }

    public function destroy($id){
        $protypes = Protype::findOrFail($id);
        $protypes->delete();
        return redirect()->route('listprotypes')->with(['message' => 'Success']);
    }
    public function test_mail()
    {
        $name = 'test name for email';
        Mail::send('emails.test',compact('name'),function ($email){
            $email->to('phannhatquy.tdc2019@gmail.com','Phan Nhat Quy');
        });
    }
}
