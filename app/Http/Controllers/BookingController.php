<?php

namespace App\Http\Controllers;

use App\Models\AddService;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking() {
        $user=Auth::user();
        return view('font-site.pages.booking',['user'=>$user]);
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
    $bookings = Booking::with('bookings')->with('user');
    $user = Auth::user();
    
    return view('admin-site.pages.booking.bookingList', [
        'BookingView' => $bookings,
        'user' => $user
    ]);
}

    // public function show(){
    //     return User::find(1)->booking;
    // }
}
