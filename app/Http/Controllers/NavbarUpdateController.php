<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarUpdateController extends Controller
{
    public function navbarUpdateForm(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.CreateAndUpdate.NavbarUpdate',['NavbarView'=>$navbar,'user'=>$user]);
    }


    public function navbarUpdateFormPush(Request $req) {
        $data = ['NavbarName' => $req->NavbarName,];
        
            $navbar = Navbar::first(); 
            if ($navbar) {
                $navbar->update($data);
                return redirect()->back();
            } else {
                Navbar::create($data);
                return redirect()->back();
            }
    }

}
