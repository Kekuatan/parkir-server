<?php

namespace App\Services\Member;

use App\Models\Member;

class MemberService
{
    public function getIdByCardNumber($cardNo = ''){
        $member = Member::where('card_no', '=', $cardNo)->first();
        if (!blank($member)){
            return $member->id;
        } else {
            return null;
        }
    }
}
