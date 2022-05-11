<?php

namespace App\Http\Controllers;

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
}
