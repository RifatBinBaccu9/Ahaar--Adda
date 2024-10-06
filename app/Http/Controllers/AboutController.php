<?php

namespace App\Http\Controllers;

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
}
