<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
     //// Team Member section  ////
     public function team() {
        $teamStor=Team::get();
        return view('font-site.pages.team', ['teamMemberView'=>$teamStor]);
    }

    //Admin Add Team Member section
    public function addTeam(){
        return view('admin-site.pages.Team-Members.addTeam');
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
        return redirect()->back();
    }

    // Admin team List 
    public function TeamList(){
        $teamStor=Team::get();
        return view('admin-site.pages.Team-Members.teamList', ['teamMemberView'=>$teamStor]);
    }
    
    //Admin team List update section
    public function TeamListUpdate($id){
        $teamUpdate=Team::where(['id'=>$id])->first();
        return view('admin-site.pages.Team-Members.teamListUpdate', ['teamStorage'=>$teamUpdate]);
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
          return redirect()->route('TeamList');
    }
    //Admin Breakfast List delete section
    public function TeamListDelete($id){
        Team::where(['id'=>$id])->delete();
        return redirect()->back();
    }

}
