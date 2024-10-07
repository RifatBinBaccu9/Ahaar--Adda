<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Dinner;
use App\Models\Launch;
use Illuminate\Support\Facades\Auth;
use App\Models\Navbar;
use App\Models\Footer;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    //// Food Menu section  ////
    public function menu() {
        $footer=Footer::get();
        $user=Auth::user();
        $navbar=Navbar::get();
        $breakfastStor=BreakFast::get();
        $launchfastStor=Launch::get();
        $dinnerStor=Dinner::get();
        return view('font-site.pages.menu', ['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user,'BreakfastView'=>$breakfastStor, 'launchView'=>$launchfastStor, 'dinnerView'=>$dinnerStor]);
    }

    //Admin Add Breakfast section
    public function addBreakFast(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Breakfast-Item.addBreakfastItem',[
            'user'=>$user,
            'NavbarView'=>$navbar,
        ]);
    }
    public function addBreakFastPush(Request $req){
        $req->validate([
          'foodPicture'=>'required',
          'foodPrice'=>'required',
          'foodName'=>'required',
          'foodDetails'=>'required|max:255',
        ]);

        if(! is_dir(public_path('admin-site/img/Breakfast'))){
            mkdir(public_path('admin-site/img/Breakfast'), 0777, true);
        }

        $breakfast=[
        'foodPrice'=>$req->foodPrice,
        'foodName'=>$req->foodName,
        'foodDetails'=>$req->foodDetails,
        ];
        
        if($req->hasFile('foodPicture')){
            $foodPicture=$req->file('foodPicture');
            $name=$foodPicture->getClientOriginalName();
            $foodPictureName=time(). "_" .$name;

            $foodPicture->move(public_path('admin-site/img/Breakfast'), $foodPictureName);

            $breakfast['foodPicture']='admin-site/img/Breakfast/'.$foodPictureName;
        }
        BreakFast::create($breakfast);
        toastr()->success('Bareakfast Item Create Successful.');
        return redirect()->back();
    }

    // Admin Breakfast List 
    public function BreakFastList(){
        $breakfastStor=BreakFast::get();
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Breakfast-Item.BreakfastList', ['NavbarView'=>$navbar,'user'=>$user, 'BreakfastView'=>$breakfastStor]);
    }
    
    //Admin Breakfast List update section
    public function BreakFastListUpdate($id){
        $user=Auth::user();
        $navbar=Navbar::get();
        $breakfastUpdate=BreakFast::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Breakfast-Item.breakfastUpdate', ['NavbarView'=>$navbar,'Breakfast'=>$breakfastUpdate, 'user'=>$user]);
    }
    public function BreakFastListEdit(Request $req){
  
          if(! is_dir(public_path('admin-site/img/Breakfast'))){
              mkdir(public_path('admin-site/img/Breakfast'), 0777, true);
          }
  
          $breakfast=[
          'foodPrice'=>$req->foodPrice,
          'foodName'=>$req->foodName,
          'foodDetails'=>$req->foodDetails,
          ];
          
          if($req->hasFile('foodPicture')){
              $foodPicture=$req->file('foodPicture');
              $name=$foodPicture->getClientOriginalName();
              $foodPictureName=time(). "_" .$name;
  
              $foodPicture->move(public_path('admin-site/img/Breakfast'), $foodPictureName);
  
              $breakfast['foodPicture']='admin-site/img/Breakfast/'.$foodPictureName;
          }
          BreakFast::where(['id'=>$req->id])->update($breakfast);
          toastr()->success('Bareakfast Item Update Successful.');
          return redirect()->route('BreakFastList');
    }
    //Admin Breakfast List delete section
    public function BreakFastListDelete($id){
        BreakFast::where(['id'=>$id])->delete();
        toastr()->success('Breakfast delete Successful.');
        return redirect()->back();
    }



    //Admin Add Launch section
    public function addLaunch(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Launch.addLaunch',['user'=>$user, 'NavbarView'=>$navbar]);
    }
    public function addLaunchPush(Request $req){
        $req->validate([
          'foodPicture'=>'required',
          'foodPrice'=>'required',
          'foodName'=>'required',
          'foodDetails'=>'required|max:255',
        ]);

        if(! is_dir(public_path('admin-site/img/Launch'))){
            mkdir(public_path('admin-site/img/Launch'), 0777, true);
        }

        $launch=[
        'foodPrice'=>$req->foodPrice,
        'foodName'=>$req->foodName,
        'foodDetails'=>$req->foodDetails,
        ];
        
        if($req->hasFile('foodPicture')){
            $foodPicture=$req->file('foodPicture');
            $name=$foodPicture->getClientOriginalName();
            $foodPictureName=time(). "_" .$name;

            $foodPicture->move(public_path('admin-site/img/Launch'), $foodPictureName);

            $launch['foodPicture']='admin-site/img/Launch/'.$foodPictureName;
        }
        Launch::create($launch);
        toastr()->success('Launch Item Create Successful.');
        return redirect()->back();
    }

   // Admin launch List 
    public function LaunchList(){
        $launchfastStor=Launch::get();
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Launch.launchList', ['NavbarView'=>$navbar,'launchView'=>$launchfastStor, 'user'=>$user]);
    }
    
    //Admin launch List update section
    public function LaunchListUpdate($id){
        $user=Auth::user();
        $navbar=Navbar::get();
        $LaunchUpdate=Launch::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Launch.LaunchListUpdate', ['NavbarView'=>$navbar,'Launch'=>$LaunchUpdate, 'user'=>$user]);
    }

    public function LaunchListEdit(Request $req){
  
          if(! is_dir(public_path('admin-site/img/Launch'))){
              mkdir(public_path('admin-site/img/Launch'), 0777, true);
          }
  
          $launch=[
          'foodPrice'=>$req->foodPrice,
          'foodName'=>$req->foodName,
          'foodDetails'=>$req->foodDetails,
          ];
          
          if($req->hasFile('foodPicture')){
              $foodPicture=$req->file('foodPicture');
              $name=$foodPicture->getClientOriginalName();
              $foodPictureName=time(). "_" .$name;
  
              $foodPicture->move(public_path('admin-site/img/Launch'), $foodPictureName);
  
              $launch['foodPicture']='admin-site/img/Launch/'.$foodPictureName;
          }
          Launch::where(['id'=>$req->id])->update($launch);
          toastr()->success('Launch Item Create Successful.');
          return redirect()->route('LaunchList');
    }
    // //Admin LaunchListDelete List delete section
    public function LaunchListDelete($id){
        Launch::where(['id'=>$id])->delete();
        toastr()->success('Launch delete Successful.');
        return redirect()->back();
    }



    //Admin Add Launch section
    public function addDinner(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Dinner.addDinner',['NavbarView'=>$navbar,'user'=>$user]);
    }
    public function addDinnerPush(Request $req){
        $req->validate([
          'foodPicture'=>'required',
          'foodPrice'=>'required',
          'foodName'=>'required',
          'foodDetails'=>'required|max:255',
        ]);

        if(! is_dir(public_path('admin-site/img/Dinner'))){
            mkdir(public_path('admin-site/img/Dinner'), 0777, true);
        }

        $dinner=[
        'foodPrice'=>$req->foodPrice,
        'foodName'=>$req->foodName,
        'foodDetails'=>$req->foodDetails,
        ];
        
        if($req->hasFile('foodPicture')){
            $foodPicture=$req->file('foodPicture');
            $name=$foodPicture->getClientOriginalName();
            $foodPictureName=time(). "_" .$name;

            $foodPicture->move(public_path('admin-site/img/Dinner'), $foodPictureName);

            $dinner['foodPicture']='admin-site/img/Dinner/'.$foodPictureName;
        }
        Dinner::create($dinner);
        toastr()->success('Dinner Item Create Successful.');
        return redirect()->back();
    }

// Admin launch List 
    public function DinnerList(){
        $user=Auth::user();
        $dinnerStor=Dinner::get();
        $navbar=Navbar::get();
        return view('admin-site.pages.Food-Menu.Dinner.dinnerList', ['NavbarView'=>$navbar,'dinnerView'=>$dinnerStor, 'user'=>$user]);
    }
    
//Admin launch List update section
    public function DinnerListUpdate($id){
        $user=Auth::user();
        $navbar=Navbar::get();
        $DinnerUpdate=Dinner::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Dinner.dinnerUpdete', ['NavbarView'=>$navbar,'Dinner'=>$DinnerUpdate, 'user'=>$user]);
    }

    public function DinnerListEdit(Request $req){
  
          if(! is_dir(public_path('admin-site/img/Dinner'))){
              mkdir(public_path('admin-site/img/Dinner'), 0777, true);
          }
  
          $dinner=[
          'foodPrice'=>$req->foodPrice,
          'foodName'=>$req->foodName,
          'foodDetails'=>$req->foodDetails,
          ];
          
          if($req->hasFile('foodPicture')){
              $foodPicture=$req->file('foodPicture');
              $name=$foodPicture->getClientOriginalName();
              $foodPictureName=time(). "_" .$name;
  
              $foodPicture->move(public_path('admin-site/img/Dinner'), $foodPictureName);
  
              $dinner['foodPicture']='admin-site/img/Dinner/'.$foodPictureName;
          }
          Dinner::where(['id'=>$req->id])->update($dinner);
          toastr()->success('Dinner Item Update Successful.');
          return redirect()->route('DinnerList');
    }
//Admin LaunchListDelete List delete section
      public function DinnerListDelete($id){
        Dinner::where(['id'=>$id])->delete();
        toastr()->success('Dinner delete Successful.');
        return redirect()->back();
      }
}
