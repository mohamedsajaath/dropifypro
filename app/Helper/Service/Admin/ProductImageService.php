<?php

namespace App\Helper\Service\Admin;

class ProductImageService
{

    public static function save($id,$images)
    {
        if(isset($images)) {
            foreach ($images as $image) {
                $image->reference_id = $id;
                $image->save();
            }
        }
    }
}
