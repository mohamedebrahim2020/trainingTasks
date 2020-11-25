<?php

namespace App\classes\Strategy;

use App\interfaces\StrategySearch;

class ContextSearchStrategy
{
    public $strategy = null;

    public function __construct(StrategySearch $strategy)
    {

        $this->strategy = $strategy;
    }

    public function executeStrategy()
    {
        return $this->strategy->calculateAlgorithmPerformance();
    }
}
