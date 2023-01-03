<?php

namespace App\Helper\Mapper\Admin;

use App\Models\ProductItemSpecification;

class ProductSpecificationMapper
{
    public static function get($requestArr)
    {
        $arr = [];

        for ($i = 0; $i < Count($requestArr['specification_type']); $i++) {
            $productSpecification = new ProductItemSpecification();
            $productSpecification->specification_name = $requestArr['specification_type'][$i];
            $productSpecification->specification_value = $requestArr['specification_type_value'][$i];
            $arr[] = $productSpecification;
        }
        return $arr;
    }
}
