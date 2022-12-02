<?php

namespace App\Helper\Service;

use App\Models\User;

class UserService
{
    public static function getById($id)
    {
        return User::findById($id);
    }
}
