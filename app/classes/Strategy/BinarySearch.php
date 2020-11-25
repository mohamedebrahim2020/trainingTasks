<?php

namespace App\classes\Strategy;

use App\interfaces\StrategySearch;

class BinarySearch implements StrategySearch
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
        $l = 0;
        $r = count($this->array) - 1;
        $start = microtime(true);
        while ($l <= $r) {
            $m = $l + ($r - $l) / 2;
            // check $int in middle;
            if ($this->array[$m] == $this->int) {
                break;
            }
            if ($this->array[$m] < $this->int) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        echo ("binary execution time" . number_format(microtime(true) - $start, 20));
    }
}
