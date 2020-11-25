<?php

namespace App\classes\Factory;

class ProductOrder
{
    protected $productOrders = array();
    protected $product;


    public function __construct()
    {
        $this->product = new productFactory();
    }

    public function order($model = null, $quantity = 1)
    {
        $product = $this->product->make($model);
        $productPrice = $product->getProductPrice();
        $this->productOrders[] = $product->getProductModel() . ":" . $productPrice;
    }

    public function getProductOrders()
    {
        return $this->productOrders;
    }
}
