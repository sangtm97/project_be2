<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Protype\ProtypeCreateFormRequest;
use App\Http\Requests\Protype\UpdateFormRequest;
use App\Models\Protype;
use Illuminate\Http\Request;
use App\Http\Services\Protype\ProtypeService;

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
        $result = $this->protypeService->create($request);
        return redirect()->back();
    }
    // edit protypes
    public function edit($id){
        $protypes = Protype::findOrFail($id);
        return view('admin.protype.edit',[
            'title'=>'Edit Protype'],
            compact('protypes')
        );
    }
    // update protypes
    public function update(UpdateFormRequest $request, $id){
        $protypes = Protype::findOrFail($id);
        $protypes->protype_name = $request->input('protype_name');
        $protypes->update();
        return redirect()->route('list')->with(['message' => 'Success']);
    }

    // hien thi
    public function list(){
        $protypes = Protype::latest('id')->paginate(50);
        return view('admin.protype.list',[
            'title'=>'List Protype'],
            compact('protypes')
        );
    }
    //delete protypes
    public function destroy($id){
        $protypes = Protype::findOrFail($id);
        $protypes->delete();
        return redirect()->route('list')->with(['message' => 'Success']);
    }
}
