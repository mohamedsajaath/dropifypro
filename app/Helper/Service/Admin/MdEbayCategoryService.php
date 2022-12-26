<?php

namespace App\Helper\Service\Admin;

use App\Models\MdEbayCategory;

class MdEbayCategoryService
{

    public static function getCategory()
    {
        $EbayCategories = new MdEbayCategory();
        return $EbayCategories->query()->get()->take(10);
    }
}
