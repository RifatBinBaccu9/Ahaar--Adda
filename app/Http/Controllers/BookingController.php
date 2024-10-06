<?php

namespace App\Http\Controllers;

use App\Models\AddBookingPeople;
use App\Models\Footer;
use App\Models\Booking;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking() {
        $user=Auth::user();
        $navbar=Navbar::get();
        $footer=Footer::get();
        return view('font-site.pages.booking',['footerView'=>$footer,'user'=>$user, 'navbarView'=>$navbar]);
    }

    // admin add booking People section
    public function addbookingPeople(){
        $navbar=Navbar::get();
        $user=Auth::user();
        return view('admin-site.pages.booking.addPeopleBooking', ['NavbarView'=>$navbar, 'user'=>$user,]);
    }
  public function bookingPeoplePush(Request $req){
    $req->validate([
        'people'=>'required'
    ]);
    $people=[
        'people'=>$req->people
    ];
    AddBookingPeople::create($people);
    return redirect()->back();
  }
  





    // admin booking List section
    public function bookingPush(Request $req){
        $req->validate([
         'name'=>'required',
         'email'=>'required|email:rfc, dns',
         'datetime'=>'required',
         'select'=>'required',
         'message'=>'required',
        ]);
        $bookingData=[
          
          'user_id' => $req->user_id,
          'name'=>$req->name,
          'email'=>$req->email,
          'datetime'=>$req->datetime,
          'select'=>$req->select,
          'message'=>$req->message,
        ];
        Booking::create($bookingData);
        return redirect()->back();
    }

    public function bookingList() {
    $navbar=Navbar::get();
    $booking = Booking::with('user')->get();
    // $user = Auth::user();
return $booking;
    
    return view('admin-site.pages.booking.bookingList', [
        'BookingView' => $booking,
        'NavbarView'=>$navbar,
        // 'user' => $user
    ]);
}
}
