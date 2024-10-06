<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    public function footerUpdateForm(){
        $user=Auth::user();
        return view('admin-site.pages.CreateAndUpdate.footerUpdate',['user'=>$user]);
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
            return redirect()->back();
        }else{
            Footer::create($footer);
            return redirect()->back();
        }
    }
}
