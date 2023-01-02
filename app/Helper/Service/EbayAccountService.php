<?php
namespace App\Helper\Service;

use App\Models\EbayAccount;

class EbayAccountService{
    public static function getByUserId($user_id){
        return EbayAccount::selectBy(['user_id'=>$user_id]);
    }
}