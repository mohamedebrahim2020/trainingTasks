<?php
namespace App\singleton;

final class Singleton
{
    private $taxes;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance() {
        static $instance = null;
        
        if (null === $instance) {
           $instance = new static();
        }
        return $instance;
     }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }

    public function getTaxes($total)
    {
      return $this->taxes = $total*0.14 ;
    }
}