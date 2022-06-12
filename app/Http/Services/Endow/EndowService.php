<?php

namespace App\Http\Services\Endow;

use App\Models\Endow;
use Illuminate\Support\Facades\Session;

class EndowService
{
    public function create($request){
        try {
            Endow::create([
                'endow_name' => (string)$request->input('endow_name')
            ]);
            Session::flash('success','Create endow success');
        }catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
