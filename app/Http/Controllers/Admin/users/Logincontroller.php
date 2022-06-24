<?php

namespace App\Http\Controllers\Admin\users;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index(){
        return view('admin.users.login',['title'=>'đăng nhập hệ thống']);
    }
    
    public function store(Request $request){
        if(Auth::attempt([
            'email' => $request -> input('email'),
            'password' => $request -> input('password')
        ])){
            return redirect() -> route('admin');
        }
        $this -> validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        
       
    }

}
