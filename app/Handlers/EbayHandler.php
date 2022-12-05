<?php
namespace App\Handlers;
use App\Client\Ebay\EbayClient;
use Exception;

class EbayHandler{
    public static function getOrder(){
        try{
        $ebay = new EbayClient('v^1.1#i^1#r^1#p^3#I^3#f^0#t^Ul4xMF83OjNDQTI4RjczQTk3RjE5RUZGOUJEOThBNTQ3QkIyQTFEXzJfMSNFXjI2MA==',0);
        $orders =  $ebay->getAllOrdersByDateRange('2022-10-30 00:00:00', '2022-11-02 23:59:59');

        return $orders;
        }catch(Exception $ex){
            print($ex->getMessage());
        }
    }
}
