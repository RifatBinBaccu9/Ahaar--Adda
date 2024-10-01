<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function userProfile(){
        $user=Auth::user();
        return view('admin-site.pages.profile.profile',['user'=>$user]);
    }
    public function updateProfile(Request $request)
{
    $user = Auth::user();
    $request->validate([
        'email'=>'email|unique:users,email,'.Auth::id(),
    ]);
    if(! is_dir(public_path('admin-site/img/profilePicture'))){
                mkdir(public_path('admin-site/img/profilePicture'), 0777, true);
              }
    $dataup = [
        'name' => $request->name,
        'email' => $request->email,
        'Phone' => $request->phone,
        'address' => $request->address,
        'about' => $request->about,
        'twitter' => $request->twitter,
        'facebook' => $request->facebook,
    ];
    if ($request->hasFile('profilePicture')) {
                $image = $request->file('profilePicture');
                $name = $image->getClientOriginalName();
                $imageName = time() . '_' . $name;
            
                $image->move(public_path('admin-site/img/profilePicture'), $imageName);
            
                $dataup['profilePicture'] = 'admin-site/img/profilePicture/' . $imageName;
            } 
    $user->update($dataup);

    return redirect()->back();
}

// password update
public function updatePassword(Request $req)
{
    $req->validate([
        'oldpassword' => 'required',
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required',
    ]);
    if (Hash::check($req->oldpassword, Auth::user()->password)) {

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($req->new_password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    } else {
        
        return redirect()->back()->with('error', 'Old password is incorrect.');
    }
}

}
