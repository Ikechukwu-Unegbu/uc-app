<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Contact;
use App\Models\Fundaccount;
use App\Models\Interaction;
use App\Models\Offer;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminPagesController extends Controller
{
    public function home(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        return view('dashboard.index');
    }

    public function showuser($username, $userid){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $user = User::find($userid);
        return view('dashboard.users.show')->with('user', $user);
    }

    public function users(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $users = User::paginate(50);
        $total = count(User::all());
//        var_dump($total);die;
        return view('dashboard.users.index')->with('users', $users)
                            ->with('total', $total);
    }

    public function packages(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        return view('dashboard.packages.index');
    }

    public function contactus(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $messages = Contact::paginate(30);
        return view('dashboard.contact.index')->with('messages', $messages);
    }

    public function offers(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $offers = Offer::paginate(30);
        return view('dashboard.offers.index')->with('offers', $offers);
    }

    public function offers_new(Request $request){
        //var_dump($request->all());die;
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $request->validate([
            'name'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required',
            'days'=>'required',
            'duration'=>'required',
            'interest'=>'required'
        ]);
        $offer = new Offer();
        $offer->name = $request->name;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->interest = $request->interest;
        $offer->img = '';
        $offer->duration = $request->duration;
        $offer->dur_dig = $request->days;
        $offer->save();

        $fileNameToStore = '';
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()){
             
                $fileNameToStore = $request->slug."".$request->file('image')->getClientOriginalName();
                $extension = $request->image->extension();
                $request->image->storeAs('/public/Offers', $fileNameToStore);
                // $url = Storage::url($unix.".".$extension);  
                $urlMain= $request->image->move(public_path('BlogPhotos'), $fileNameToStore);           
            }
            $newOffer = Offer::find($offer->id);
            $newOffer->img = $fileNameToStore;
            $newOffer->save();
            }else {
                
        }
        FacadesSession::flash('success', 'New Offer Created');
        return redirect()->back();
    }

    public function address(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $add = Address::all();
        return view('dashboard.address.address')
            ->with('adds', $add);
    }

    public function addressStore(Request $request){
        //var_dump($request->all());die;
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $request->validate([
            'coin_abb'=>'required|string',
            'address'=>'required|string'
        ]);

        $address = new Address();
        $address->coin_abb = $request->coin_abb;
        $address->addrs = $request->address;
        $address->save();

        FacadesSession::flash('success', 'Wallet Set');
        return redirect()->back();
    }

    public function editAddress(Request $request, $target){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $add = Address::find($target);
        $add->coin_abb = $request->coin_abb;
        $add->addrs = $request->address;
        $add->save();
        FacadesSession::flash('success', 'Edited');
        return redirect()->back();
    }

    public function deleteAddress($target){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $add = Address::find($target)->delete();
        FacadesSession::flash('success', 'Deleted');
        return redirect()->back();
    }


    public function offer_delete($id){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $offer = Offer::find($id)->delete();
        FacadesSession::flash('success', 'Offer deleted.');
        return redirect()->back();
    }

    public function userFund(){
        $userLogged = User::find(Auth::user()->id);
        if(!Gate::allows('isuser', $userLogged)) {
            abort(404);
        }
        $funds = Fundaccount::paginate(50);
        return view('dashboard.users.userfund')->with('funds', $funds);
    }

    public function addfund($userid, $amount, $fundid){
        $wallet = Wallet::where('user_id', $userid)->first();
        $wallet->balace = ($wallet->balace + (int)$amount);
        $wallet->save();
        $fund = Fundaccount::find($fundid);
        $fund->process = 1;
        $fund->save();
        FacadesSession::flash('success', 'User has been funded');
        return redirect()->back();
    }
}
