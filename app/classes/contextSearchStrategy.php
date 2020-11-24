<?php

namespace App\classes;

use App\interfaces\StrategySearch;

class contextSearchStrategy
{
    public $strategy = NULL; 
  
    public function __construct(StrategySearch $strategy) {
 
       $this->strategy = $strategy;
    } 

    public function executeStrategy(){
        return $this->strategy->calculateAlgorithmPerformance();
    }


}