<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    public function carouselUpdateForm (){
        $user=Auth::user();
        $navbar=Navbar::get();
     return view('admin-site.pages.CreateAndUpdate.carouselUpdate', [
        'user'=>$user,
        'NavbarView'=>$navbar,
    ]);
    }
    
    public function carouselUpdatePush(Request $req){
        $carouselData=[
            'carouselName'=>$req->carouselName,
            'description'=>$req->description
        ];
        $carousel=Carousel::first();
        if($carousel){
            $carousel->update($carouselData);
            toastr()->success('Carousel Data Update Successful.');
            return redirect()->back();
        }else{
            $req->validate([
                'carouselName'=> 'required',
                'description'=> 'required',
                ]);
            Carousel::create($carouselData);
            toastr()->success('Carousel Data Create Successful.');
            return redirect()->back();
        }
    }
}
