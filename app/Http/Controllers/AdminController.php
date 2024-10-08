<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin() {
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.profile.profile',[
            'user'=>$user,
            'NavbarView'=>$navbar,
        ]);
    }
}
