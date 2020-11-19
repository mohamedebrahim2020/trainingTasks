<?php

namespace App\classes;

use App\interfaces\StrategySearch;

class binarySearch implements StrategySearch
{
    public function calculate_performance_of_search_algorithm($array,$int){
        $l = 0;
        $r = count($array)-1;
        $start = microtime(true);
        while ($l <= $r) 
    { 
        $m = $l + ($r - $l) / 2; 
        // check $int in middle;
        if ($array[$m] == $int) 
             break;
        if ($array[$m] < $int) 
            $l = $m + 1; 
        else
            $r = $m - 1; 

            
    } 

    echo ("binary execution time".number_format(microtime(true)- $start,20));
}
}