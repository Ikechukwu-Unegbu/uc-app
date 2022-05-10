<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function settings(){
        return view('pages.settings.settings');
    }

    public function resetPassword(){

    }

    public function settingsStore(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->midname = $request->midname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->save();
        //handle image upload
        

        Session::flash('settings-done', 'Your Settings has been saved.');
        return redirect()->back();
    }


}
