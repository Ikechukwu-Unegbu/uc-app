<?php
namespace App\Services\Schedule;

use App\Models\Pending;
use App\Models\User;
use App\Notifications\InterestPaid;

class Compensate{

    public function getAllDue(){
        $dueInvests = Pending::where('expires', date('Y-m-d'))->get();
        if($dueInvests) return $dueInvests;
        return false;
    }

    

    public function calculateInterest($allDueInvests){
        if($allDueInvests){
            // $allDueInvests = $this->getAllDue();
            foreach($allDueInvests as $due){
                $interest = ($due->interests/100) *$due->amount;
                //pay intests
                $user = User::find($due->user->id);
                $user->wallet->balace = (float)$user->wallet->balace+(float)$interest;
                //send email
                $user->notify(new InterestPaid($user, $due));
            }
        }
    }
}