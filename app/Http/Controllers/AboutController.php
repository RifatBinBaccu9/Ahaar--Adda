<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function about(){
        $user=Auth::user();
        $navbar=Navbar::get();
            return view('font-site.pages.about',  ['navbarView'=>$navbar, 'user'=>$user]);
    }

    // admin update about section 
    public function aboutUpdateForm(){
        $user=Auth::user();
        return view('admin-site.pages.CreateAndUpdate.abuteUpdate', ['user'=>$user]);
    }

    public function aboutUpdatePush(Request $req){
        $about=[
            'years'=>$req->years,
            'chefs'=>$req->chefs,
            'description'=>$req->description,
        ];
        $aboutData=About::first();
    }
}
