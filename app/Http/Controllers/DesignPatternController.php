<?php

namespace App\Http\Controllers;

use App\classes\productOrder;
use App\singleton\Singleton;
use Illuminate\Http\Request;

class DesignPatternController extends Controller
{
    public function trySingletone(){
        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(30);
        var_dump($instance);

        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(100);
        var_dump($instance);

        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(50);
        var_dump($instance);
    }

    public function tryFactory(){
        $productOrder = new productOrder;
        var_dump($productOrder->getproductOrders());
 
        $productOrder->order('jacket');
        var_dump($productOrder->getproductOrders());
 
        $productOrder->order('shoes');
        var_dump($productOrder->getproductOrders());
    }
}
