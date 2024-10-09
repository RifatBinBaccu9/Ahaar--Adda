<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Team;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{
     //// Team Member section  ////
     public function team() {
        $navbar=Navbar::get();
        $user=Auth::user();
        $footer=Footer::get();
        $teamStor=Team::get();
        return view('font-site.pages.team', [
            'footerView'=>$footer,
            'navbarView'=>$navbar,
            'user'=>$user,
            'teamMemberView'=>$teamStor
        ]);
    }

    //Admin Add Team Member section
    public function addTeam(){
        $navbar=Navbar::get();
        $user=Auth::user();
        return view('admin-site.pages.Team-Members.addTeam',['NavbarView'=>$navbar,'user'=>$user]);
    }

    public function addTeamPush(Request $req){
        $req->validate([
          'MemberName'=>'required',
          'MemberDesignation'=>'required',
          'FacebookLink'=>'required',
          'TuitterLink'=>'required',
          'InstagramLink'=>'required',
        ]);

        if(! is_dir(public_path('admin-site/img/Team'))){
            mkdir(public_path('admin-site/img/Team'), 0777, true);
        }

        $team=[
        'MemberName'=>$req->MemberName,
        'MemberDesignation'=>$req->MemberDesignation,
        'FacebookLink'=>$req->FacebookLink,
        'TuitterLink'=>$req->TuitterLink,
        'InstagramLink'=>$req->InstagramLink,
        ];
        
        if($req->hasFile('MemberPicture')){
            $MemberPicture=$req->file('MemberPicture');
            $name=$MemberPicture->getClientOriginalName();
            $MemberPictureName=time(). "_" .$name;

            $MemberPicture->move(public_path('admin-site/img/Team'), $MemberPictureName);

            $team['MemberPicture']='admin-site/img/team/'.$MemberPictureName;
        }
        Team::create($team);
        toastr()->success('Team Create Successful.');
        return redirect()->back();
    }

    // Admin team List 
    public function TeamList(){
        $navbar=Navbar::get();
        $user=Auth::user();
        $teamStor=Team::get();
        return view('admin-site.pages.Team-Members.teamList', ['NavbarView'=>$navbar,'teamMemberView'=>$teamStor, 'user'=>$user]);
    }
    
    //Admin team List update section
    public function TeamListUpdate($id){
        $user=Auth::user();
        $navbar=Navbar::get();
        $teamUpdate=Team::where(['id'=>$id])->first();
        return view('admin-site.pages.Team-Members.teamListUpdate', ['NavbarView'=>$navbar,'teamStorage'=>$teamUpdate, 'user'=>$user]);
    }
    public function TeamListEdit(Request $req){
  
        if(! is_dir(public_path('admin-site/img/Team'))){
            mkdir(public_path('admin-site/img/Team'), 0777, true);
        }

        $team=[
        'MemberName'=>$req->MemberName,
        'MemberDesignation'=>$req->MemberDesignation,
        'FacebookLink'=>$req->FacebookLink,
        'TuitterLink'=>$req->TuitterLink,
        'InstagramLink'=>$req->InstagramLink,
        ];
        
        if($req->hasFile('MemberPicture')){
            $MemberPicture=$req->file('MemberPicture');
            $name=$MemberPicture->getClientOriginalName();
            $MemberPictureName=time(). "_" .$name;

            $MemberPicture->move(public_path('admin-site/img/Team'), $MemberPictureName);

            $team['MemberPicture']='admin-site/img/team/'.$MemberPictureName;
        }
          Team::where(['id'=>$req->id])->update($team);
          toastr()->success('Team Update Successful.');
          return redirect()->route('TeamList');
    }
    //Admin Breakfast List delete section
    public function TeamListDelete($id){
        Team::where(['id'=>$id])->delete();
        toastr()->success('Team Delete Successful.');
        return redirect()->back();
    }

}
