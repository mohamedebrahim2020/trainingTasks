<?php

namespace App\classes;
use App\interfaces\Product;

class jacketProduct implements Product
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