<?php

namespace App\Helper\Service\Admin;

class ProductItemSpecificationService
{

    public Static function save($productId,$specifications){

        if(isset($specifications)) {
            foreach ($specifications as $index => $specification) {
                $specification->product_id = $productId;
                $specification->save();
            }
        }
    }
}
