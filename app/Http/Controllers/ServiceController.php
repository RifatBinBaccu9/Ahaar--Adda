<?php

namespace App\Http\Controllers;

use App\Models\AddService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service() {
        $serviceStor=AddService::get();
        return view('font-site.pages.service', ['serviceView'=>$serviceStor]);
    }
    // Admin add service section  //
   public function addService() {
    return view('admin-site.pages.service.addService');
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
    return view('admin-site.pages.service.serviceList', ['serviceView'=>$serviceStor]);
}

// Admin add servise update section
   public function serviceListUpdate($id){
  $serviceDataStor=AddService::where(['id'=>$id])->first();
  return view('admin-site.pages.service.serviceUpdate', ['serviceDataUpdate'=>$serviceDataStor]);
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
}
