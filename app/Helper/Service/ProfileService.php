<?php

namespace App\Helper\Service;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfileService
{
    public static function updateFromRequest(Request $request)
    {
        $user = User::getCurrentUser();
        $user->loadFromRequest($request);
        return $user->save();
    }

    public static function validatePassword($confirmedPassword)
    {
        $user = User::getCurrentUser();
        if (Hash::check($confirmedPassword, $user->password,)) return true;
        return false;
    }
}
