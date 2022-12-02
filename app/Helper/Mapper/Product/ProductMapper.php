<?php

namespace App\Helper\Mapper\Product;

use App\Models\Product;

interface ProductMapper
{
    public function getProduct(): Product;
    public function getVariants():array;
}
