<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Dinner;
use App\Models\Launch;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    //// Food Menu section  ////
    public function menu() {
        $breakfastStor=BreakFast::get();
        $launchfastStor=Launch::get();
        $dinnerStor=Dinner::get();
        return view('font-site.pages.menu', ['BreakfastView'=>$breakfastStor, 'launchView'=>$launchfastStor, 'dinnerView'=>$dinnerStor]);
    }

    //Admin Add Breakfast section
    public function addBreakFast(){
        return view('admin-site.pages.Food-Menu.Breakfast-Item.addBreakfastItem');
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
        return redirect()->back();
    }

    // Admin Breakfast List 
    public function BreakFastList(){
        $breakfastStor=BreakFast::get();
        return view('admin-site.pages.Food-Menu.Breakfast-Item.BreakfastList', ['BreakfastView'=>$breakfastStor]);
    }
    
    //Admin Breakfast List update section
    public function BreakFastListUpdate($id){
        $breakfastUpdate=BreakFast::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Breakfast-Item.breakfastUpdate', ['Breakfast'=>$breakfastUpdate]);
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
          return redirect()->route('BreakFastList');
    }
    //Admin Breakfast List delete section
    public function BreakFastListDelete($id){
        BreakFast::where(['id'=>$id])->delete();
        return redirect()->back();
    }



    //Admin Add Launch section
    public function addLaunch(){
        return view('admin-site.pages.Food-Menu.Launch.addLaunch');
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
        return redirect()->back();
    }

   // Admin launch List 
    public function LaunchList(){
        $launchfastStor=Launch::get();
        return view('admin-site.pages.Food-Menu.Launch.launchList', ['launchView'=>$launchfastStor]);
    }
    
    //Admin launch List update section
    public function LaunchListUpdate($id){
        $LaunchUpdate=Launch::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Launch.LaunchListUpdate', ['Launch'=>$LaunchUpdate]);
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
          return redirect()->route('LaunchList');
    }
    // //Admin LaunchListDelete List delete section
    public function LaunchListDelete($id){
        Launch::where(['id'=>$id])->delete();
        return redirect()->back();
    }



    //Admin Add Launch section
    public function addDinner(){
        return view('admin-site.pages.Food-Menu.Dinner.addDinner');
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
        return redirect()->back();
    }

// Admin launch List 
    public function DinnerList(){
        $dinnerStor=Dinner::get();
        return view('admin-site.pages.Food-Menu.Dinner.dinnerList', ['dinnerView'=>$dinnerStor]);
    }
    
//Admin launch List update section
    public function DinnerListUpdate($id){
        $DinnerUpdate=Dinner::where(['id'=>$id])->first();
        return view('admin-site.pages.Food-Menu.Dinner.dinnerUpdete', ['Dinner'=>$DinnerUpdate]);
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
          return redirect()->route('DinnerList');
    }
//Admin LaunchListDelete List delete section
      public function DinnerListDelete($id){
        Dinner::where(['id'=>$id])->delete();
        return redirect()->back();
      }
}
