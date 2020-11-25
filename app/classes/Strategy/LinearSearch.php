<?php

namespace App\classes\Strategy;

use App\interfaces\StrategySearch;

class LinearSearch implements StrategySearch
{
    public $array;
    public $int;

    public function __construct($array, $int)
    {

        $this->array = $array;
        $this->int = $int;
    }
    public function calculateAlgorithmPerformance()
    {
        $start = microtime(true);
        $n = sizeof($this->array);
        for ($i = 0; $i < $n; $i++) {
            if ($this->array [$i] == $this->int) {
                echo ("linear execution time" . number_format(microtime(true) - $start, 10));
            }
        }
    }
}
