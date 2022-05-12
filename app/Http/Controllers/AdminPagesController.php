<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Contact;
use App\Models\Interaction;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminPagesController extends Controller
{
    public function home(){
        return view('dashboard.index');
    }

    public function users(){
        $users = User::paginate(50);
        $total = count(User::all());
//        var_dump($total);die;
        return view('dashboard.users.index')->with('users', $users)
                            ->with('total', $total);
    }

    public function packages(){
        return view('dashboard.packages.index');
    }

    public function contactus(){
        $messages = Contact::paginate(30);
        return view('dashboard.contact.index')->with('messages', $messages);
    }

    public function offers(){
        $offers = Offer::paginate(30);
        return view('dashboard.offers.index')->with('offers', $offers);
    }

    public function offers_new(Request $request){
        //var_dump($request->all());die;
        $request->validate([
            'name'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required',
            'interest'=>'required'
        ]);
        $offer = new Offer();
        $offer->name = $request->name;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->interest = $request->interest;
        $offer->img = '';
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
        $add = Address::all();
        return view('dashboard.address.address')
            ->with('adds', $add);
    }

    public function addressStore(Request $request){
        //var_dump($request->all());die;
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
        $add = Address::find($target);
        $add->coin_abb = $request->coin_abb;
        $add->addrs = $request->address;
        $add->save();
        FacadesSession::flash('success', 'Edited');
        return redirect()->back();
    }

    public function deleteAddress($target){
        $add = Address::find($target)->delete();
        FacadesSession::flash('success', 'Deleted');
        return redirect()->back();
    }
}
