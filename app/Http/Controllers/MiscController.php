<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Wallet;
use Illuminate\Http\Request;
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
}
