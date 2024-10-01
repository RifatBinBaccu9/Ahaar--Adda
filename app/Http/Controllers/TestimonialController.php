<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial() {
        $user=Auth::user();
        $TestimonialData=Testimonial::get();
        return view('font-site.pages.testimonial', ['user'=>$user,'TestimonialView'=>$TestimonialData]);
    }
// admin add testimonial section
    public function addTestimonial() {
        $user=Auth::user();
        return view('admin-site.pages.testimonial.addTestimonial',['user'=>$user]);
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
          return redirect()->back();
    }

    // admin testimonial list section
    public function TestimonialList(){
        $user=Auth::user();
        $TestimonialData=Testimonial::get();
        return view('admin-site.pages.testimonial.TestimonialList', ['TestimonialView'=>$TestimonialData, 'user'=>$user]);
    }

    // admin Testimonial update section
    public function TestimonialListupdate($id){
        $user=Auth::user();
        $TestimonialStor=Testimonial::where(['id'=>$id])->first();
        return view('admin-site.pages.testimonial.TestimonialListupdate', ['TestimonialStorage'=>$TestimonialStor, 'user'=>$user]);
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
        return redirect()->route('TestimonialList');
    }

    public function TestimonialListdelete($id){
        Testimonial::where(['id'=>$id])->delete();
        return redirect()->back();
    }
}
