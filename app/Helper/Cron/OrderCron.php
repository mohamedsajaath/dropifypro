<?php

namespace App\Helper\Cron;

use App\Helper\Service\EbayAccountService;
use App\Helper\Service\UserService as ServiceUserService;
use App\Models\EbayAccount;
use App\Helper\Service\UserService;
use App\Helper\Service\OrderService;
use App\Service\OrderService as ServiceOrderService;

class OrderCron
{
    public static function processOrders()
    {
        //fetch all users
        $users = UserService::getAllUsers();
        //loop each user
        foreach ($users as $user) {
            // by user id fetch ebay account object
            $userId = $user->id;
            // catch ebay account object collection
            $ebayAccounts = EbayAccountService::getByUserId($userId);
            foreach ($ebayAccounts as $ebayAccount) {
                // call OrderService::processOrders(pass ebay_account object)
                ServiceOrderService::processOrders($ebayAccount);
            }
        }
    }
}
