<?php

namespace App\classes;

use App\interfaces\BloggerObserver as InterfacesBloggerObserver;
use App\interfaces\BloggerSubject;
use App\traits\Write;

class bloggerObserver implements InterfacesBloggerObserver
{
    use Write;
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    public function update(BloggerSubject $subject) {
      $this->writeln('*IN BLOG OBSERVER - NEW BLOGGer ALERT*');
      $this->writeln($this->name."   see     ".$subject->getBlogs());
      $this->writeln('*IN BLOG OBSERVER - BLOG BLOGGer ALERT OVER*');      
    }
}   