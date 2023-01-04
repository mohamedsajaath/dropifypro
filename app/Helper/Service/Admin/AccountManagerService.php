<?php

namespace App\Helper\Service\Admin;

use Illuminate\Http\Request;
use App\Models\AccountManager;
use Illuminate\Support\Facades\Hash;

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

    public static function updateFromRequest(Request $request)
    {
        $user = AccountManager::getCurrentUser();
        $user->loadFromRequest($request);
        return $user->save();
    }

    // public static function validateEmail($confirmedEmail)
    // {
    //     $user = AccountManager::getCurrentUser();
    //     if (Hash::check($confirmedEmail, $user->email,)) return true;
    //     return false;
    // }
}
