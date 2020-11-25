<?php

namespace App\classes\Factory;

class ProductFactory
{
    protected $product;
    public function make($model = null)
    {
        if ($model == 'jacket') {
            return $this->product = new jacketProduct();
        } else {
            return $this->product = new shoesProduct();
        }
    }
}
