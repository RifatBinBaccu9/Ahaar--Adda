<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupLoginControllr extends Controller
{

//// Signup section ////
    public function signup() {
        return view('font-site.pages.signup-login.signup');
    }
    public function signupPush(Request $req){
        $req->validate([
        'name'=>'required|max:17',
        'email' => 'required|email:rfc,dns',
        'password'=>'required',
        'password_confirmation'=>'required|same:password',
        'iAgree'=>'required',
        ]);
        $signupData=[
       'name'=>$req->name,
       'email'=>$req->email,
       'password'=>$req->password,
       'iAgree'=>$req->iAgree,
        ];
        User::create($signupData);
        return redirect()->route('login');
    }

    // Login section
    public function login(){
        return view('font-site.pages.signup-login.login');
    }
    public function loginPush(Request $req){
        if(Auth::attempt(['email' =>$req->email, 'password' =>$req->password])){
           if(Auth::user()->is_tyep == 'admin'){
            return redirect()->route('admin');
           }else{
            return redirect()->route('home');
           }
        }else{
            return redirect()->route('login');
        }
    }

    // Log Out section
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
