<?php
namespace App\interfaces;

interface StrategySearch 
{
    public function calculate_performance_of_search_algorithm($array,$int);
}