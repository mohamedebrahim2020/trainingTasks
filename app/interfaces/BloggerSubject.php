<?php
namespace App\interfaces;

interface BloggerSubject
{
    public function attach(BloggerObserver $observer_in);
    public function detach(BloggerObserver $observer_in);
    public function notify();
    public function updateBlogs($newBlogs);
    public function getBlogs();
}