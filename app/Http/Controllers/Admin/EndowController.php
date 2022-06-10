<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Endow\EndowCreateFormRequest;
use App\Http\Requests\Endow\UpdateFormRequest;
use App\Models\Endow;
use Illuminate\Http\Request;
use App\Http\Services\Endow\EndowService;

class EndowController extends Controller
{
    protected $endowService;

    public function __construct(EndowService $endowService)
    {
        $this->endowService = $endowService;
    }

    public function create(){
        return view('admin.endow.add', [
            'title' => 'Add New Endow'
        ]);
    }

    public function store(EndowCreateFormRequest $request){
        $result = $this->endowService->create($request);
        return redirect()->back();
    }

    public function edit($id){
        $endows = Endow::findOrFail($id);
        return view('admin.endow.edit',[
            'title'=>'Edit Endow'],
            compact('endows')
        );
    }

    public function update(UpdateFormRequest $request, $id){
        $endows = Endow::findOrFail($id);
        $endows->endow_name = $request->input('endow_name');
        $endows->update();
        return redirect()->route('list')->with(['message' => 'Success']);
    }


    public function list(){
        $endows = Endow::latest('id')->paginate(50);
        return view('admin.endow.list',[
            'title'=>'List Endow'],
            compact('endows')
        );
    }

    public function destroy($id){
        $endows = Endow::findOrFail($id);
        $endows->delete();
        return redirect()->route('list')->with(['message' => 'Success']);
    }
}
