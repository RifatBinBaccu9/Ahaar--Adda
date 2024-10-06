<?php

namespace App\Http\Controllers;

use App\Models\AddService;
use App\Models\Navbar;
use Illuminate\Support\Facades\Auth;
use App\Models\Footer;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service() {
        $footer=Footer::get();
        $navbar=Navbar::get();
        $serviceStor=AddService::get();
        $user=Auth::user();
        return view('font-site.pages.service', ['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user,'serviceView'=>$serviceStor]);
    }
    // Admin add service section  //
   public function addService() {
    $navbar=Navbar::get();
    $user=Auth::user();
    return view('admin-site.pages.service.addService',['NavbarView'=>$navbar,'user'=>$user]);
}
   public function addServicePush(Request $req){
    $req->validate([
        'ServiceIcon'=> 'required|max:100',
        'ServiceTitle'=> 'required|max:50',
        'ServiceDetails'=> 'required|max:255',
    ]);
    $serviceData=[
        'ServiceIcon'=>$req->ServiceIcon,
        'ServiceTitle'=>$req->ServiceTitle,
        'ServiceDetails'=>$req->ServiceDetails,
    ];
    AddService::create($serviceData);
    return redirect()->back();
   }
   public function serviceList() {
    $serviceStor=AddService::get();
    $navbar=Navbar::get();
    $user=Auth::user();
    return view('admin-site.pages.service.serviceList', ['NavbarView'=>$navbar,'serviceView'=>$serviceStor, 'user'=>$user]);
}

// Admin add servise update section
   public function serviceListUpdate($id){
    $user=Auth::user();
    $navbar=Navbar::get();
  $serviceDataStor=AddService::where(['id'=>$id])->first();
  return view('admin-site.pages.service.serviceUpdate', ['NavbarView'=>$navbar,'serviceDataUpdate'=>$serviceDataStor, 'user'=>$user]);
   }
   public function serviceListEdit(Request $req){
    $req->validate([
        'ServiceIcon'=> 'required|max:100',
        'ServiceTitle'=> 'required|max:50',
        'ServiceDetails'=> 'required|max:255',
    ]);
    $serviceData=[
        'ServiceIcon'=>$req->ServiceIcon,
        'ServiceTitle'=>$req->ServiceTitle,
        'ServiceDetails'=>$req->ServiceDetails,
    ];
    AddService::where(['id'=>$req->id])->update($serviceData);
    return redirect()->route('serviceList');
   }
   
//Admin delete section
   public function serviceListDelete($id){
    AddService::where(['id'=>$id])->delete();
    return redirect()->back();
   }

   
   // admin status accepted 
   public function accept($id)
   {
       $post = AddService::findOrFail($id);
       $post->status = 'accepted';
       $post->save();

       return redirect()->back();
   }

   // admin status rejected 
   public function reject($id)
   {
       $post = AddService::findOrFail($id);
       $post->status = 'rejected';
       $post->save();

       return redirect()->back();
   }

}
