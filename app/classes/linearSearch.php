<?php

namespace App\classes;

use App\interfaces\StrategySearch;

class linearSearch implements StrategySearch
{
    public function calculate_performance_of_search_algorithm($array,$int){
        $start = microtime(true);
        $n = sizeof($array); 
        for($i = 0; $i < $n; $i++) 
        { 
            if($array[$i] == $int) 
                
            echo ("linear execution time".number_format(microtime(true)- $start,10)); 
                
        } 
        
        
    }
}