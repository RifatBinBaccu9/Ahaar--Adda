<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking() {
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('font-site.pages.booking',['user'=>$user, 'navbarView'=>$navbar]);
    }
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
    $booking = Booking::with('user')->get();
    // $user = Auth::user();
return $booking;
    
    return view('admin-site.pages.booking.bookingList', [
        'BookingView' => $booking,
        // 'user' => $user
    ]);
}
}
