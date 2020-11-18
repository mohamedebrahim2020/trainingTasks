<?php

namespace App\classes;

use App\interfaces\BloggerObserver as InterfacesBloggerObserver;
use App\interfaces\BloggerSubject;
use App\traits\Write;

class bloggerObserver implements InterfacesBloggerObserver
{
    use Write;
    public function __construct() {
    }
    public function update(BloggerSubject $subject) {
      $this->writeln('*IN BLOG OBSERVER - NEW BLOGGer ALERT*');
      $this->writeln(' new Blog update: '.$subject->getBlogs());
      $this->writeln('*IN BLOG OBSERVER - BLOG BLOGGer ALERT OVER*');      
    }
}    