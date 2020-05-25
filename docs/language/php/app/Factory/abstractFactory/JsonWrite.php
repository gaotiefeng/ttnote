<?php


namespace App\Factory\abstractFactory;


interface JsonWrite
{
    public function write(array $data, bool $formatter):string ;
}