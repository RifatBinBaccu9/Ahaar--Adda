<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BookingController extends Controller
{
    public function booking() {
        return view('font-site.pages.booking');
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
          'name'=>$req->name,
          'email'=>$req->email,
          'datetime'=>$req->datetime,
          'select'=>$req->select,
          'message'=>$req->message,
        ];
        Booking::create($bookingData);
        return redirect()->back();
    }

    public function bookingList(){
        $bookingStor=Booking::get();
        return view('admin-site.pages.booking.bookingList', ['BookingView'=>$bookingStor]);
    }
}
