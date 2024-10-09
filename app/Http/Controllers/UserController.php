<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userSite(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('user-site.pages.profile',['NavbarView'=>$navbar,'user'=>$user]);
    }
    public function userSiteprofiles(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('user-site.pages.profile', ['NavbarView'=>$navbar,'user'=>$user]);
    }
    public function userSitebookingList(){
        $user=Auth::user();
        $navbar=Navbar::get();
        $booking = Booking::where('user_id', Auth::user()->id)->get();
        return view('user-site.pages.BookingList', [
            'NavbarView'=>$navbar,
            'BookingView' => $booking, 
            'user'=>$user
        ]);
    }
}
