<?php
namespace App\traits;

trait Write
{
    public function writeln($line_in) {
        echo $line_in."<br/>";
    }
}