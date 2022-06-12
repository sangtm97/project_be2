<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login',[
            'title' => 'truong tuan dung - login'
        ]);
    }

    public function store(Request $request)
    {
       $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
       ]);

       if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) 
        {
            return redirect()->route('admin');
        }
        Session::flash('error' ,'Đăng nhập thất bại _ Email hoặc mật khẩu không chính xác');
        return redirect()->back();
    }
}
