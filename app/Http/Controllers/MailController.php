<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class MailController extends Controller
{
   public function sentMail(){
        $booking=Booking::get();
        return view('mail', ['bookingView'=>$booking]);
    }
}
