<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\HelloUser;
use App\Services\Schedule\Compensate;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function mailTesting(){
        $user = User::find(3);
        $user->notify(new HelloUser($user));
    }

    public function testInterestPayment(){
        $compensate = new Compensate();
        $due = $compensate->getAllDue();
        $interest = $compensate->calculateInterest($due);
        // var_dump($interest);
    }
}
