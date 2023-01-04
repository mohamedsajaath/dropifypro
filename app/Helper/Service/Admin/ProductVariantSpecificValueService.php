<?php

namespace App\Helper\Service\Admin;

use App\Models\ProductVariantSpecificValue;

class ProductVariantSpecificValueService
{

    public static function save($variationId, $specificValueId)
    {

        $productVariantSpecificationValue = new ProductVariantSpecificValue();

        $productVariantSpecificationValue->variant_id = $variationId;

        $productVariantSpecificationValue->variant_specific_value_id = $specificValueId;

        $productVariantSpecificationValue->save();

    }
}
