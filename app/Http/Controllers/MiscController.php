<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Pending;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\Invested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MiscController extends Controller
{
    public function topup(Request $request, $id){
        $wallet = Wallet::where('user_id', $id)->first();

        $wallet->balace = ($wallet->balace + (int)$request->amount);
        $wallet->save();
        Session::flash('success', 'Top up successful.');
        return redirect()->back();
    }

    public function requestPage(){
        $req = ModelsRequest::paginate(30);
        //print($req->user->id);die;
        return view('dashboard.requests.request')->with('requests', $req);
    }

    public function invest(Request $req, $offerId){
        //var_dump($req->all());var_dump($offerId);die;
        $date = date('Y-m-d h:i:s', time());
        $user = User::find(Auth::user()->id);
        $req->validate([
            'amount'=>'required'
        ]);
        // validating amount
        if((float)$user->wallet->balace <= (float)$req->amount){
            Session::flash('failed', 'Insufficient balance. Please fund your account.');
            return redirect()->back();
        }
        //
        $pending = new Pending();
        $pending->user_id = Auth::user()->id;
        $pending->amount = $req->amount;
        // $pending->recieved = 0;
        $offer = Offer::find($offerId);
        $pending->offer_id = $offerId;
        $pending->expiry = date('Y-m-d', strtotime($date. ' + '.$offer->dur_dig.' days'));
        $pending->save();
        
        
        $user->notify(new Invested($user, $pending));

        Session::flash('success', 'Your investiment is pending verifcation by admin.');
        return redirect()->back();
    }


    public function user_investments(){

        $pendings = Pending::paginate(50);
        return view('dashboard.userinvestments.index')->with('invests', $pendings);
    }


    public function blockuser($userid){
        $user = User::find($userid);
        $user->blocked = 0;
        $user->save();

        Session::flash('success', 'User has been blocked.');
        return redirect()->back();
    }

    public function un_blockuser($userid){
        $user = User::find($userid);
        $user->blocked = 1;
        $user->save();

        Session::flash('success', 'User has been ublocked.');
        return redirect()->back();
    }


}
