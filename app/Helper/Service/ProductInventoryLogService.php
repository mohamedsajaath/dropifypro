<?php

namespace App\Helper\Service;

use App\Models\ProductInventoryLog;
use App\Models\User;

class ProductInventoryLogService
{
    const UPDATED_BY_ADMIN_MSG = 'Inventory updated.';
    const UPDATED_BY_SELLER_MSG = 'Product Purchased';

    public static function getLastEntryByVariantId($variant_id)
    {
        return ProductInventoryLog::query()
            ->where('product_variant_id', '=', $variant_id)
            ->orderBy('id', 'DESC')
            ->first();
    }

    public static function save(ProductInventoryLog $productInventoryLog)
    {
        $user = UserService::getById($productInventoryLog->user_id);
        if($user->isAdmin()){
            $productInventoryLog->note = self::UPDATED_BY_ADMIN_MSG;
            $productInventoryLog->save();
            return;
        }

        $productInventoryLog->note = self::UPDATED_BY_SELLER_MSG;
        $productInventoryLog->save();
    }
}
