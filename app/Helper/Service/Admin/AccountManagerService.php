<?php

namespace App\Helper\Service\Admin;

use App\Models\AccountManager;

class AccountManagerService
{
    public static function storeFromRequest($request, $id = null)
    {
        $accountManager = new AccountManager();
        $accountManager->storeFromRequest($request, $id);
        
    }
    public static function deleteById($id){

        AccountManager::deleteById($id);
    }
}
