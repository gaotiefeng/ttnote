<?php


namespace App\Design\Struct\Flyweight;


interface Text
{
    public function render(string $extrinsicState) :string ;
}