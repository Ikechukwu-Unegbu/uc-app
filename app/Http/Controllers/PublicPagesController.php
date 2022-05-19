<?php

namespace App\Http\Controllers;

use App\Models\Userwallet;
use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function home(){
        return view('pages.home.index');
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

        return view('pages.fund.withdraw')->with('adds', $addresses);
    }
}
