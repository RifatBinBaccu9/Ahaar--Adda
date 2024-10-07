<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use App\Models\Navbar;
use App\Models\Footer;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial() {
        $navbar=Navbar::get();
        $user=Auth::user();
        $footer=Footer::get();
        $TestimonialData=Testimonial::get();
        return view('font-site.pages.testimonial', ['footerView'=>$footer,'navbarView'=>$navbar,'user'=>$user,'TestimonialView'=>$TestimonialData]);
    }
// admin add testimonial section
    public function addTestimonial() {
        $user=Auth::user();
        $navbar=Navbar::get();
        return view('admin-site.pages.testimonial.addTestimonial',['NavbarView'=>$navbar,'user'=>$user]);
    }
    public function addTestimonialPush(Request $req){
        $req->validate([
            'TestimonialName'=>'required',
            'TestimonialProfesstion'=>'required',
            'TestimonialDetails'=>'required',
          ]);
  
          if(! is_dir(public_path('admin-site/img/Testimonial'))){
              mkdir(public_path('admin-site/img/Testimonial'), 0777, true);
          }
  
          $testimonial=[
          'TestimonialName'=>$req->TestimonialName,
          'TestimonialProfesstion'=>$req->TestimonialProfesstion,
          'TestimonialDetails'=>$req->TestimonialDetails,
          ];
          
          if($req->hasFile('TestimonialPicture')){
              $TestimonialPicture=$req->file('TestimonialPicture');
              $name=$TestimonialPicture->getClientOriginalName();
              $TestimonialPictureName=time(). "_" .$name;
  
              $TestimonialPicture->move(public_path('admin-site/img/Testimonial'), $TestimonialPictureName);
  
              $testimonial['TestimonialPicture']='admin-site/img/Testimonial/'.$TestimonialPictureName;
          }
          Testimonial::create($testimonial);
          toastr()->success('Testimonial Create Successful.');
          return redirect()->back();
    }

    // admin testimonial list section
    public function TestimonialList(){
        $user=Auth::user();
        $navbar=Navbar::get();
        $TestimonialData=Testimonial::get();
        return view('admin-site.pages.testimonial.TestimonialList', ['NavbarView'=>$navbar,'TestimonialView'=>$TestimonialData, 'user'=>$user]);
    }

    // admin Testimonial update section
    public function TestimonialListupdate($id){
        $user=Auth::user();
        $navbar=Navbar::get();
        $TestimonialStor=Testimonial::where(['id'=>$id])->first();
        return view('admin-site.pages.testimonial.TestimonialListupdate', ['NavbarView'=>$navbar,'TestimonialStorage'=>$TestimonialStor, 'user'=>$user]);
    }
    public function TestimonialListEdit(Request $req){
        if(! is_dir(public_path('admin-site/img/Testimonial'))){
            mkdir(public_path('admin-site/img/Testimonial'), 0777, true);
        }

        $testimonial=[
        'TestimonialName'=>$req->TestimonialName,
        'TestimonialProfesstion'=>$req->TestimonialProfesstion,
        'TestimonialDetails'=>$req->TestimonialDetails,
        ];
        
        if($req->hasFile('TestimonialPicture')){
            $TestimonialPicture=$req->file('TestimonialPicture');
            $name=$TestimonialPicture->getClientOriginalName();
            $TestimonialPictureName=time(). "_" .$name;

            $TestimonialPicture->move(public_path('admin-site/img/Testimonial'), $TestimonialPictureName);

            $testimonial['TestimonialPicture']='admin-site/img/Testimonial/'.$TestimonialPictureName;
        }
        Testimonial::where(['id'=>$req->id])->update($testimonial);
        toastr()->success('Testimonial Update Successful.');
        return redirect()->route('TestimonialList');
    }

    public function TestimonialListdelete($id){
        Testimonial::where(['id'=>$id])->delete();
        toastr()->success('Testimonial Delete Successful.');
        return redirect()->back();
    }
}
