<?php


namespace App\Design\Behavioral\Specification;


interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item):bool ;
}