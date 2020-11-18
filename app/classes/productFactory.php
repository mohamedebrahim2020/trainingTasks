<?php

namespace App\classes;

class productFactory
{
    protected $product;
    public function make($model = null)
    {
        if ($model == 'jacket')
        return $this->product = new jacketProduct();
        return $this->product = new shoesProduct();
    }
}
