<?php

namespace App\Helper\Service\Admin;



class SpecificService
{

    public static function fetch($specificArr,$specificValueArr){
        foreach ($specificArr as $specific) {
            $specificId = "";
            if (!VariantSpecificService::nameExists($specific)) {
                return VariantSpecificService::save($specific);
            }else{
                $variantSpecific = VariantSpecificService::getId($specific);
                print($variantSpecific[0]['id']);



            }




        }

    }
}
