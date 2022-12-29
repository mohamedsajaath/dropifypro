<?php
namespace App\Helper\Service;

use App\Models\Order;

class WalletService{
    public static function consumeCaculatedAmount(Order $order){
        $userId = $order->user_id;
        $totalOrderCapitalAmount = 0;
        foreach($order->items as $item){
            $variantId = $item->order_item_product_variant->product_variant_id;
            //caught $variantId, $userId
            //by using above both values fetch UserProductVariant object
            // catch cost_price from above object
            //add cost price to $totalOrderCapitalAmount
        }
        
        //fetch wallet by user id
        //check is consumableamount existing on the wallet (wallet amount >= $totalOrderCapitalAmount)
        //if yes
            // $wallet->amount = $wallet->amount - $totalOrderCapitalAmount;
            // $wallet->save();
            // courier
            // $order->status == Order::COMPLETED;
            // $order->save();
        // else
            //$order->status == $order::NOT_COMPLETED;    
            //$order->save()  
    }
}