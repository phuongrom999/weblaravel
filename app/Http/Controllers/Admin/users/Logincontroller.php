<?php

namespace App\Http\Controllers\Admin\users;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index(){
        return view('admin.users.login',['title'=>'đăng nhập hệ thống']);
    }
    
    public function store(Request $request){
        $this -> validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
    ],$request->input('remember'))){

        return redirect()-> route('admin');

        }
        return redirect()->back();
    }
}
