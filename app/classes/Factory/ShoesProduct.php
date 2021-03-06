<?php

namespace App\classes\Factory;

use App\interfaces\Product;

class ShoesProduct implements Product
{
    protected $model = 'shoes';
    protected $price = 60;

    public function getProductModel()
    {
        return $this->model;
    }

    public function getProductPrice()
    {
        return $this->price;
    }
}
