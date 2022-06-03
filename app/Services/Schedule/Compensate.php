<?php
namespace App\Services\Schedule;

use App\Models\Offer;
use App\Models\Pending;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\InterestPaid;
use Illuminate\Support\Facades\DB;

class Compensate{

    public function getAllDue(){
        $dueInvests = DB::table('pendings')->select(DB::raw('*'))
        ->whereRaw('Date(expiry) = CURDATE()')->get();
        if($dueInvests) return $dueInvests;
        return false;
    }

    

    public function calculateInterest($allDueInvests){
        if($allDueInvests){
            // $allDueInvests = $this->getAllDue();
            foreach($allDueInvests as $due){
                $offer = Offer::find($due->offer_id);
                $interest = ((float)$offer->interest/100)*(float)$due->amount;
                // var_dump($interest);
                //pay intests
                $wallet = Wallet::where('user_id', $due->user_id)->first();
                $wallet->balace = (float)$wallet->balace+(float)$interest;
                $wallet->save();
                // //send email
                $user = User::find($wallet->user_id);
                $user->notify(new InterestPaid($user, $offer));
            }
        }
    }
}