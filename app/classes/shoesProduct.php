<?php

namespace App\classes;
use App\interfaces\Product;

class shoesProduct implements Product
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