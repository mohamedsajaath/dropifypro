<?php

namespace App\Helper\Service\Admin;

use App\Models\AccountManager;

class AccountManagerService
{
    public static function save(AccountManager $AccountManager)
    {
        $AccountManager->save();
    }

    public static function show()
    {
        return AccountManager::all();
    }
}
