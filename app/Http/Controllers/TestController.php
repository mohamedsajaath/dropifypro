<?php

namespace App\Http\Controllers;

use App\Handlers\EbayHandler;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function  index()
    {
        $result = EbayHandler::getOrder();
        print_r($result);
    }
}
