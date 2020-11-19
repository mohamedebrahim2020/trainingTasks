<?php

namespace App\classes;

class contextSearchStrategy
{
    public $strategy = NULL; 
    //strategy is not instantiated at construct time but runtime
    public function __construct($search_algorithm_id) {
        switch ($search_algorithm_id) {
            case "linear": 
                $this->strategy = new linearSearch();
                return $this->strategy;
            break;
            case "binary": 
                $this->strategy = new binarySearch();
                return $this->strategy;
            break;

        }
       
}
}