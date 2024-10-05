<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllPagesSettingController extends Controller
{
    //// All Pages Setting  ////

//admin Navbar section
    public function AllPagesSettingnavbar(){
        $user=Auth::user();
        $navdata=Navbar::first();
        // dd($navdata);
        return view('admin-site.pages.allpages.navName', ['user'=>$user, 'navView'=>$navdata]);
    }
    public function navbarPush(Request $req) {
         $data=[
            'WebsitName' => $req->WebsitName,
        ];
      
           Navbar::create($data);

    
        return redirect()->route('navbar');
    }
    
}
