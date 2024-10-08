<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    public function footerUpdateForm(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.CreateAndUpdate.footerUpdate',['NavbarView'=>$navbar,'user'=>$user]);
    }
    public function footerUpdatePush(Request $req){
        $footer=[
         'FooterAddress'=>$req->FooterAddress,
         'FooterPhone'=>$req->FooterPhone,
         'FooterEmail'=>$req->FooterEmail,
         'OpeningDayOption1'=>$req->OpeningDayOption1,
         'OpeningTimeOption1'=>$req->OpeningTimeOption1,
         'OpeningDayOption2'=>$req->OpeningDayOption2,
         'OpeningTimeOption2'=>$req->OpeningTimeOption2,
         'FooterNewsletter'=>$req->FooterNewsletter,
        ];

        $footerData=Footer::first();
        if($footerData){
            $footerData->update($footer);
            toastr()->success('Footer Data Update Successful.');
            return redirect()->back();
        }else{
            $req->validate([
                'FooterAddress'=> 'required',
                'FooterPhone'=> 'required',
                'FooterEmail'=> 'required',
                'OpeningDayOption1'=> 'required',
                'OpeningTimeOption1'=> 'required',
                'OpeningDayOption2'=> 'required',
                'OpeningTimeOption2'=> 'required',
                'FooterNewsletter'=> 'required'
                ]);
            Footer::create($footer);
            toastr()->success('Footer Data Create Successful.');
            return redirect()->back();
        }
    }
}
