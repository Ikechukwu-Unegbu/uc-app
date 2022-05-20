<?php

namespace App\Http\Controllers;

use App\Models\Pending;
use App\Models\Request as ModelsRequest;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MiscController extends Controller
{
    public function topup(Request $request, $id){
        $wallet = Wallet::where('user_id', $id)->first();

        $wallet->balace = $request->amount;
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
        $req->validate([
            'amount'=>'required'
        ]);
        $pending = new Pending();
        $pending->user_id = Auth::user()->id;
        $pending->amount = $req->amount;
        $pending->recieved = 0;
        $pending->offer_id = $offerId;
        $pending->save();

        Session::flash('success', 'Your investiment is pending verifcation by admin.');
        return redirect()->back();
    }
}
