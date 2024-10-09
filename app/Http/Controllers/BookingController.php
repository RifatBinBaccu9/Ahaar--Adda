<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\AddBookingPeople;
use App\Models\Footer;
use App\Models\Booking;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function booking() {
        $user=Auth::user();
        $navbar=Navbar::get();
        $booking=AddBookingPeople::get();
        $footer=Footer::get();
        return view('font-site.pages.booking',[
            'bookingView'=>$booking, 
            'footerView'=>$footer,
            'user'=>$user, 
            'navbarView'=>$navbar
        ]);
    }

    // admin add booking People section
    public function addbookingPeople(){
        $navbar=Navbar::get();
        $user=Auth::user();
        return view('admin-site.pages.booking.addPeopleBooking', [
            'NavbarView'=>$navbar, 
            'user'=>$user,
        ]);
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
  public function addbookingPeopleData(){
    $navbar=Navbar::get();
    $people=AddBookingPeople::get();
    $user=Auth::user();
    return view('admin-site.pages.booking.peopleBookingData', [
        'NavbarView'=>$navbar, 
        'user'=>$user, 
        'peopleView'=>$people
    ]);
  }

public function addbookingPeopleUpdate($id){
    $navbar=Navbar::get();
    $user=Auth::user();
    $peopleData=AddBookingPeople::where(['id'=>$id])->first();
    return view('admin-site.pages.booking.peopleListUpdate', [ 'NavbarView'=>$navbar, 'user'=>$user, 'peopleUpView'=>$peopleData]);
}

public function addbookingPeopleDataedit (Request $req){
    $people=[
        'people'=>$req->people
    ]; 
   AddBookingPeople::where(['id'=>$req->id])->update($people);
   return redirect()->route('addbookingPeopleData');
}
public function addbookingPeopleDataDelete($id){
    AddBookingPeople::where(['id'=>$id])->delete();
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
          'user_id' => Auth::user()->id,
          'name'=>$req->name,
          'email'=>$req->email,
          'datetime'=>$req->datetime,
          'select'=>$req->select,
          'message'=>$req->message,
        ];
        Booking::create($bookingData);
        toastr()->success('Your Booking Successful.');
        return redirect()->route('userSitebookingList');
    }

    public function bookingList() {
    $navbar=Navbar::get();
    $user=Auth::user();
    $booking = Booking::with('user')->get();
    
    return view('admin-site.pages.booking.bookingList', [
        'BookingView' => $booking,
        'NavbarView'=>$navbar,
        'user' => $user
    ]);
}

 // admin status accepted 
 public function accept($id)
 {
     $post = Booking::findOrFail($id);
     $post->status = 'accepted';
     $post->save();

     Mail::to($post->email)->send(new WelcomeMail($post, 'accepted'));
     return redirect()->back();
 }

 // admin status rejected 
 public function reject($id)
 {
     $post = Booking::findOrFail($id);
     $post->status = 'rejected';
     $post->save();

     Mail::to($post->email)->send(new WelcomeMail($post, 'rejected'));
     return redirect()->back();
 }
}
