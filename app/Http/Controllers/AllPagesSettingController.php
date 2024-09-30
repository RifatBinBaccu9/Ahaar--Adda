<?php

namespace App\Http\Controllers;

use App\Models\AllPagesSetting;
use Illuminate\Http\Request;

class AllPagesSettingController extends Controller
{
    //// All Pages Setting  ////

//admin Navbar section
    public function AllPagesSettingnavbar(){
        return view('admin-site.pages.All Pages Setting.navbar');
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
