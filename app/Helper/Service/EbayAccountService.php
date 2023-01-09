<?php
namespace App\Helper\Service;

use App\Models\EbayAccount;

class EbayAccountService{
    public static function getByUserId($user_id){
        //  dd($user_id);
        return EbayAccount::selectFirstEntry(['user_id'=>$user_id]);
        //  dd($user);
    }
}