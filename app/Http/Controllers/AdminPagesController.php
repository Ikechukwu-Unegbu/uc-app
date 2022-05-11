<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Interaction;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function home(){
        return view('dashboard.index');
    }

    public function users(){
        $users = User::paginate(50);
        return view('dashboard.users.index')->with('users', $users);
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
}
