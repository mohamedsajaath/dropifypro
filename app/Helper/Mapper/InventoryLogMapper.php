<?php

namespace App\Helper\Mapper;

use App\Helper\Utility\DateTimeUtility;
use App\Models\ProductInventoryLog;

class InventoryLogMapper
{
    public static function getLogByValue($variant_id, $previous_qty, $current_qty, $user_id)
    {
        $productInventoryLog = new ProductInventoryLog();
        $productInventoryLog->variant_id = $variant_id;
        $productInventoryLog->previous_quantity = $previous_qty;
        $productInventoryLog->current_quantity = $current_qty;
        $productInventoryLog->user_id = $user_id;
        $productInventoryLog->date = DateTimeUtility::getCurrentDate();
        return $productInventoryLog;
    }
}
