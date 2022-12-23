<?php
namespace App\Helper\Service;

use App\Models\OrderCustomer;

class OrderCustomerService{

    public static function save(OrderCustomer $orderCustomer){
        $orderCustomer->save();   
    }
}
?>