<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('font-site.pages.contact');
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
        return redirect()->back();
    }
    public function contactList(){
        $contactSror=contact::get();
        return view('admin-site.pages.contact.contactList', ['contactView'=>$contactSror]);
    }
}
