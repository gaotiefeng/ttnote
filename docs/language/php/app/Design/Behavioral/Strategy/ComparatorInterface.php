<?php


namespace App\Design\Behavioral\Strategy;


interface ComparatorInterface
{
    public function compare($a, $b):int ;
}