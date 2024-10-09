<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\About;
use App\Models\Navbar;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function about(){
        $user=Auth::user();
        $navbar=Navbar::get();
        $about=About::get();
        $footer=Footer::get();
        $teamStor=Team::get();
        return view('font-site.pages.about',  [
            'footerView'=>$footer,
            'aboutview'=>$about, 
            'navbarView'=>$navbar, 
            'user'=>$user,
            'teamMemberView'=>$teamStor
        ]);
    }

    // admin update about section 
    public function aboutUpdateForm(){
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.CreateAndUpdate.abuteUpdate', [
            'user'=>$user,
            'NavbarView'=>$navbar,
        ]);
    }

    public function aboutUpdatePush(Request $req){

        $about=[
            'years'=>$req->years,
            'chefs'=>$req->chefs,
            'description'=>$req->description,
        ];
        
        if(! is_dir(public_path('admin-site/img/aboutImage'))){
            mkdir(public_path('admin-site/img/aboutImage'), 0777, true);
        }
       
        if($req->hasFile('image1')){
            $image1=$req->file('image1');
            $name1=$image1->getClientOriginalName();
            $image1Name=time(). "_" .$name1;

            $image1->move(public_path('admin-site/img/aboutImage'), $image1Name);

            $about['image1']='admin-site/img/aboutImage/' .$image1Name;
        }

        if(! is_dir(public_path('admin-site/img/aboutImage'))){
            mkdir(public_path('admin-site/img/aboutImage'), 0777, true);
        }
       
        if($req->hasFile('image2')){
            $image2=$req->file('image2');
            $name2=$image2->getClientOriginalName();
            $image2Name=time(). "_" .$name2;

            $image2->move(public_path('admin-site/img/aboutImage'), $image2Name);

            $about['image2']='/admin-site/img/aboutImage/'.$image2Name;
        }

        if(! is_dir(public_path('admin-site/img/aboutImage'))){
            mkdir(public_path('admin-site/img/aboutImage'), 0777, true);
        }
       
        if($req->hasFile('image3')){
            $image3=$req->file('image3');
            $name3=$image3->getClientOriginalName();
            $image3Name=time(). "_" .$name3;

            $image3->move(public_path('admin-site/img/aboutImage'), $image3Name);

            $about['image3']='/admin-site/img/aboutImage/'.$image3Name;
        }

        if(! is_dir(public_path('admin-site/img/aboutImage'))){
            mkdir(public_path('admin-site/img/aboutImage'), 0777, true);
        }
       
        if($req->hasFile('image4')){
            $image4=$req->file('image4');
            $name4=$image4->getClientOriginalName();
            $image4Name=time(). "_" .$name4;

            $image4->move(public_path('admin-site/img/aboutImage'), $image4Name);

            $about['image4']='/admin-site/img/aboutImage/'.$image4Name;
        }

        $aboutData=About::first();
        if($aboutData){
            $aboutData->update($about);
            toastr()->success('About Data Update Successful.');
            return redirect()->back();
        }else{
            $req->validate([
                'years'=> 'required',
                'chefs'=> 'required',
                'description'=> 'required',
                ]);
            About::create($about);
            toastr()->success('About Data Create Successful.');
            return redirect()->back();
        }
    }
}
