<?php

namespace App\Http\Controllers;

use App\Models\AllPagesSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllPagesSettingController extends Controller
{
    //// All Pages Setting  ////

//admin Navbar section
    public function AllPagesSettingnavbar(){
        $user=Auth::user();
        return view('admin-site.pages.allpages.navName',['user'=>$user]);
    }
    public function navbarPush(Request $req){
        $req->validate([
            'NavbarName'=>'required',
        ]);
    $navbarData=[
     'NavbarName'=>$req->NavbarName,
    ];
      AllPagesSetting::create($navbarData);
      dd($navbarData);
    }
}
