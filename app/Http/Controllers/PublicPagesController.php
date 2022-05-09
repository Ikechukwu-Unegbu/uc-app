<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function home(){
        return view('pages.home.index');
    }

    public function contact(){
        return view('pages.contact.index');
    }

    public function about(){
        return view('pages.about.index');
    }
}
