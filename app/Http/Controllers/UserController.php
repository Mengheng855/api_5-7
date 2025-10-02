<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function add(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:6'
        ]);
        $data['password']=Hash::make($request->password);
        $insert=User::create($data);
        if($insert){
            return redirect('/');
        }else{
            return redirect('/register');
        }
    }
}
