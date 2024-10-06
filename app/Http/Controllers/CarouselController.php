<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    public function carouselUpdateForm (){
        $user=Auth::user();
     return view('admin-site.pages.CreateAndUpdate.carouselUpdate', ['user'=>$user]);
    }
    
    public function carouselUpdatePush(Request $req){
        $carouselData=[
            'carouselName'=>$req->carouselName,
            'description'=>$req->description
        ];
        $carousel=Carousel::first();
        if($carousel){
            $carousel->update($carouselData);
            return redirect()->back();
        }else{
            Carousel::create($carouselData);
            return redirect()->back();
        }
    }
}
