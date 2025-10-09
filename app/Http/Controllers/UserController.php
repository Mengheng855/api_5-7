<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function addUser(Request $req){
        $data=$req->validate([
            'name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:6'
        ]);
        $data['password']=Hash::make($req->password);
        $insert=User::create($data);
        if($insert){
            return redirect('/auth/showLogin');
        }else{
            return redirect('/auth/register');
        }
    }
    public function login(Request $req){
        $email=$req->email;
        $password=$req->password;
        
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            if(Auth::user()->role==0){
                return redirect('/');
            }else{
                return redirect('/dashboard/admin');
            }
        }
    }
}
