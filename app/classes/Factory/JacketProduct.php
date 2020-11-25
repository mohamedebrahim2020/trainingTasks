<?php

namespace App\classes\Factory;

use App\interfaces\Product;

class JacketProduct implements Product
{
    protected $model = 'jacket';
    protected $price = 30;

    public function getProductModel()
    {
        return $this->model;
    }

    public function getProductPrice()
    {
        return $this->price;
    }
}
