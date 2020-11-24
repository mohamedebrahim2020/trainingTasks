<?php

namespace App\Http\Controllers;

use App\classes\binarySearch;
use App\classes\bloggerObserver;
use App\classes\bloggerSubject;
use App\classes\contextSearchStrategy;
use App\classes\DependencyInjection;
use App\classes\linearSearch;
use App\classes\productOrder;
use App\singleton\Singleton;
use App\traits\Write;
use Illuminate\Http\Request;

class DesignPatternController extends Controller
{
    use Write;
    public function trySingletone(){
        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(30);
        var_dump($instance);

        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(100);
        var_dump($instance);

        $instance = Singleton::getInstance();
        $taxes = $instance->getTaxes(50);
        var_dump($instance);
    }

    public function tryDependencyInjection(DependencyInjection $instance){
        $instance->setTaxes(30);
        var_dump($instance);

        $instance->setTaxes(100);
        var_dump($instance);

        $instance->setTaxes(50);
        var_dump($instance);
    }

    public function tryFactory(){
        $productOrder = new productOrder;
        var_dump($productOrder->getproductOrders());
 
        $productOrder->order('jacket');
        var_dump($productOrder->getproductOrders());
 
        $productOrder->order('shoes');
        var_dump($productOrder->getproductOrders());
    }

    public function tryObserver(){
        
        $this->writeln('BEGIN TESTING OBSERVER PATTERN');
        $this->writeln('');
        //make blogger (person who make blog)
        $twitterPerson = new bloggerSubject(); 
        //instantiate blog
        $follower = new bloggerObserver("aly");
        $follower2 = new bloggerObserver("adhme");
        
        //add this blog as an observer for blogger person
        $twitterPerson->attach($follower);
        $twitterPerson->attach($follower2);

        //update blogger subject and notify observer 
        $twitterPerson->updateBlogs('1st update');
        //re update blogger subject and notify observer
        $twitterPerson->updateBlogs('2nd update');
        //remove blog observer
        $twitterPerson->detach($follower);
        //re update blogger subject but not notify the observer as it becomes no observer
        $twitterPerson->updateBlogs('3rd update');
        $this->writeln('third update not published as observer is not still listen to subject');
        $this->writeln('END TESTING OBSERVER PATTERN');
    }

    public function tryStrategy(){
        $array=range(1,10000000);
        // $contextSearchStrategyObj1 = new contextSearchStrategy("linear");
        // $contextSearchStrategyObj1->strategy->calculate_performance_of_search_algorithm($array,10000000);
        // echo "<hr />";
        // $contextSearchStrategyObj2 = new contextSearchStrategy("binary");
        // $contextSearchStrategyObj2->strategy->calculate_performance_of_search_algorithm($array,10000000);

        // updated code 

        $contextObj1 = new contextSearchStrategy(new linearSearch($array,10000000));
        $contextObj2 = new contextSearchStrategy(new binarySearch($array,10000000));
        $strategyExecutedTime1 = $contextObj1->executeStrategy();
        echo "<hr />";
        $strategyExecutedTime2 = $contextObj2->executeStrategy();

      

    }
}
