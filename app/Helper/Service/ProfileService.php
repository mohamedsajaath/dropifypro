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

    public static function updateImageFromRequest(Request $request)
    {
        $user = User::getCurrentUser();
        if ($request->has('avatar')) {
            if (isset($user->avatar) && !empty($user->avatar) && file_exists(public_path('storage/' . $user->avatar))) {
                unlink(public_path('storage/' . $user->avatar));
            }

            $extension = $request->avatar->getClientOriginalExtension();
            $imageName = time() . "." . $extension;
            $path = $request->avatar->storeAs('public/images', $imageName);
            $user->image_url = str_replace('public/', '', $path);
            $user->save();  
            return true;   
        }return false;
    }


}
