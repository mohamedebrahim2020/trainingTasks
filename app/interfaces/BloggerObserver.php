<?php
namespace App\interfaces;

interface BloggerObserver
{
    public function update(BloggerSubject $subject_in);
}