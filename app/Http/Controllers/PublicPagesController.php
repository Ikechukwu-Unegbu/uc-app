<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Offer;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Userwallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicPagesController extends Controller
{
    public function home(){
        $offers = Offer::all();
        $addres = Address::all();
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
            return view('pages.home.index')->with('offers', $offers)
            ->with('adds', $addres)
            ->with('user', $user);
        }
        return view('pages.home.index')->with('offers', $offers)
            ->with('adds', $addres);
    }

    public function blog(){
        return view('pages.blog.index');
    }

    public function contact(){
        return view('pages.contact.index');
    }

    public function about(){
        return view('pages.about.index');
    }

    public function faq(){
        return view('pages.faq.index');
    }

    public function data(){
        return view('pages.data.index');
    }

    public function team(){
        return view('pages.team.index');
    }

    public function withdraw(){

        $addresses = Userwallet::all();
        $withs = ModelsRequest::all();  

        return view('pages.fund.withdraw')->with('adds', $addresses)
                        ->with('withdrawals', $withs);
    }
}
