<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Fundaccount;
use App\Models\Offer;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Userwallet;
use App\Models\Wallet;
use App\Notifications\WithdrawalRequestRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $wallet = Wallet::where('user_id', '=', $user->id)->first();
        $offers = Offer::all();
        $addres = Address::all();
        $funds = Fundaccount::where('process', 0)->get();


        return view('pages.profile.index')
            ->with('wallet', $wallet)
            ->with('user', $user)
            ->with('offers', $offers)
            ->with('adds', $addres)
            ->with('funds', $funds);
    }

    public function fund(Request $request){
        $request->validate([
            'amount'=>'required'
        ]);
        $fund = new Fundaccount();
        $fund->amount = $request->amount;
        $fund->user_id = Auth::user()->id;
        $fund->process = 0;
        $fund->save();

        return redirect()->back();
    }


    public function settings(){
        $user = User::find(Auth::user()->id);
        
        return view('pages.settings.settings')
                                        ->with('user', $user);
                                        // ->with('wallet', $wallet);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'password'=>'required|string',
            'new_password'=>'required|string',
            'confirm'=>'required|string'
        ]);
        if($request->new_password != $request->confirm){
            Session::flash('mismatch', 'New password doesnt match.');
            return redirect()->back();
        }

        $user = User::find(Auth::user()->id);
        $user->password = $request->new_password;
        $user->save();
        
        Session::flash('password-set', 'Password reset successful.');
        return redirect()->back();
    }

    public function settingsStore(Request $request){
        // var_dump($request->all());die;
        $user = User::find(Auth::user()->id);
        // $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->midname = $request->midname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->gender = $request->gender;

        $user->save();
        //handle image upload
        $fileNameToStore = '';
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()){
                $validated = $request->validate([
                    // 'name'=>'string',
                    'image'=> 'mimes:jpeg,png|max:10000000',
                ]);
                $fileNameToStore = $request->slug."".$request->file('image')->getClientOriginalName();
                $extension = $request->image->extension();
                $request->image->storeAs('/public/BlogPhotos', $fileNameToStore);
                // $url = Storage::url($unix.".".$extension);  
                $urlMain= $request->image->move(public_path('BlogPhotos'), $fileNameToStore);           
            }
            $newuser = User::find($user->id);
            $newuser->avatar = $fileNameToStore;
            $newuser->save();
            }else {
                
            $fileNameToStore = 'noimage.png';
        }

        Session::flash('settings-done', 'Your Settings has been saved.');
        return redirect()->back();
    }



    public function addAddress(Request $request){
        //var_dump($request->all());
        $request->validate([
            'address'=>'required|string',
            'coin_initial'=>'required|string'
        ]);

        $wallet = New Userwallet();
        $wallet->coin_abb = $request->coin_initial;
        $wallet->user_id = Auth::user()->id;
        $wallet->wallet_add = $request->address;
        $wallet->save();

        Session::flash('success', $request->coin_abb.' '.'Wallet Address set.');
        return redirect()->back();
    }

    public function withdrawRequest(Request $request){
        var_dump($request->all());
        $request->validate([
            'amount'=>'required',
            'address'=>'required'
        ]);

        $req = new ModelsRequest();
        $req->user_id = Auth::user()->id;
        $req->amount = $request->amount;
        $req->add = $request->address;
        $req->save();
        // add notification
        $user = User::find(Auth::user()->id);
        $user->notify(new WithdrawalRequestRecieved($user, $req));
        Session::flash('request', 'Your request will be responded to shortly.');
        return redirect()->back();
    }

    public function deleteAddress($addressId){
        $address = Userwallet::find($addressId);
        $address->delete();
        return redirect()->back();
    }

    public function cancelRequest($reqId){
        $req = ModelsRequest::find($reqId);
        $req->delete();
        return redirect()->back();
    }

}
