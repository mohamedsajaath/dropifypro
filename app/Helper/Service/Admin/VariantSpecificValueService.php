<?php

namespace App\Helper\Service\Admin;

use App\Models\VariantSpecificValue;

class VariantSpecificValueService
{


    public static function nameExists(string $validateValue)
    {
        return VariantSpecificValue::query()->where('value', '=', $validateValue)->exists();
    }
    public static function getId(string $validateValue)
    {
        return VariantSpecificValue::query()->where('value', '=', $validateValue)->get()->all()[0]['id'];
    }

    public static function save($specificId, $variantSpecificValue)
    {

        if(!self::nameExists($variantSpecificValue->value)){
            $variantSpecificValue->variant_specific_id = $specificId;
            $variantSpecificValue->save();
            return $variantSpecificValue->id;
        }else{
            return self::getId($variantSpecificValue->value);
        }


    }

}
