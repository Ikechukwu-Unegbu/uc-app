<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\HelloUser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function mailTesting(){
        $user = User::find(3);
        $user->notify(new HelloUser());
    }
}
