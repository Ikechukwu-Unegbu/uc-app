<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Interaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InteractionsController extends Controller
{
    function contactStore(Request $request){
        var_dump($request->all());
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string'
        ]);

        $cont = new Contact();
        $cont->name = $request->name;
        $cont->email = $request->email;
        $cont->subject = $request->subject;
        $cont->message = $request->message;
        $cont->phone = $request->phone;
        $cont->save();
        
        Session::flash('success', 'Message have been recieved. We will be in touch.');
        return redirect()->back();
    }


}
