<?php

namespace App\classes\DependencyInjection;

class DependencyInjection 
{
    protected $tax;
    private $counter = 0;

    public function getCounter()
    {
      return $this->counter;
    }

    public function incrementCounter()
    {
      $this->counter++;
    }

    public function counterIsOdd()
    {
      return $this->counter % 2 == 0 ? FALSE : TRUE;
    }

    public function setTaxes($totalPrice)
    {
        $this->tax = $totalPrice*0.14;
    }

    public function getTaxes()
    {
        return $this->tax;
    }


}