<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchUser(Request $request){
        $result = User::where('name', $request->term)
            ->orWhere('email', $request->term)->paginate(20);

        return view('dashboard.search.users')->with('results', $result);
    }
}
