<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\contact;
use App\Models\Navbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $footer=Footer::get();
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('font-site.pages.contact',['footerView'=>$footer,'user'=>$user, 'navbarView'=>$navbar]);
    }
    public function contactPush(Request $req){
        $req->validate([
        'name'=>'required',
        'email'=>'required|email:rfc,dns',
        'subject'=>'required',
        'message'=>'required|max:255',
        ]);
        $contactData=[
         'name'=>$req->name,
         'email'=>$req->email,
         'subject'=>$req->subject,
         'message'=>$req->message,
        ];
        contact::create($contactData);
        toastr()->success('Your Information Submit Successful.');
        return redirect()->back();
    }
    public function contactList(){
        $contactSror=contact::get();
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.contact.contactList', [
            'contactView'=>$contactSror, 
            'user'=>$user,
            'NavbarView'=>$navbar,
        ]);
    }
}
