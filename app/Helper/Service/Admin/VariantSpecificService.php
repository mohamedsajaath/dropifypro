<?php

namespace App\Helper\Service\Admin;

use App\Models\VariantSpecific;

class VariantSpecificService
{

    public static function nameExists(string $validateValue)
    {
        return VariantSpecific::query()->where('name', '=', $validateValue)->exists();
    }
    public static function getId(string $validateValue)
    {
        return VariantSpecific::query()->where('name', '=', $validateValue)->get()->all()[0]['id'];
    }

    public static function save($specific)
    {
        if(!self::nameExists($specific->name)){
            $specific->save();
            return $specific->id;
        }else{
            return self::getId($specific->name);
        }
    }


}
