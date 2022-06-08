<?php

namespace App\Http\Services\Protype;

use App\Models\Protype;
use Illuminate\Support\Facades\Session;

class ProtypeService
{
    public function create($request){
        try {
            Protype::create([
                'protype_name' => (string)$request->input('protype_name')
            ]);
            Session::flash('success','Create protype success');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
