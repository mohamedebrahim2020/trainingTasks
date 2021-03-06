<?php

namespace App\classes\Observer;

use App\interfaces\BloggerObserver;
use App\interfaces\BloggerSubject as InterfacesBloggerSubject;

class BloggerSubject implements InterfacesBloggerSubject
{
    private $blogs = null;
    private $observers = array();
    public function __construct()
    {
    }
    public function attach(BloggerObserver $observer_in)
    {

        $this->observers[] = $observer_in;
    }
    public function detach(BloggerObserver $observer_in)
    {

        foreach ($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }
    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
    public function updateBlogs($newBlogs)
    {
        $this->blogs = $newBlogs;
        $this->notify();
    }
    public function getBlogs()
    {
        return $this->blogs;
    }
}
