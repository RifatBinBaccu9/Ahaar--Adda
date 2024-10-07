<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;

class SignupLoginControllr extends Controller
{

//// Signup section ////
    public function signup() {
        $navbar=Navbar::get();
        $user=Auth::user();
        $footer=Footer::get();
        return view('font-site.pages.signup-login.signup',['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user]);
    }
    public function signupPush(Request $req){
        $req->validate([
        'name'=>'required|max:17',
        'email' =>  'required|email|unique:users,email',
        'password'=>'required|min:8',
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
        toastr()->success('Create Your Account Successful');
        return redirect()->route('login');
    }

    // Login section
    public function login(){
        $navbar=Navbar::get();
        $footer=Footer::get();
        $user=Auth::user();
        return view('font-site.pages.signup-login.login',['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user]);
    }
    public function loginPush(Request $req){
        if(Auth::attempt(['email' =>$req->email, 'password' =>$req->password])){
           if(Auth::user()->is_tyep == 'admin'){
               toastr()->success('Your Login Successful.');
               return redirect()->route('admin');
            
           }else{
               toastr()->success('Your Login Successful.');
            return redirect()->route('home');
           }
        }else{
          toastr()->error('Your Login Failed.');
        return redirect()->route('login');
        }
    }

    // Log Out section
    public function logout(){
        Auth::logout();
        toastr()->success('Your Log Out successful.');
        return redirect()->route('home');
    }
}
