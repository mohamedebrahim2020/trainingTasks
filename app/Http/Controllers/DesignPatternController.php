<?php

namespace App\Http\Controllers;

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
}
