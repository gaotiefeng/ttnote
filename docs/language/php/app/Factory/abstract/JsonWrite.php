<?php


namespace php;


interface JsonWrite
{
    public function write(array $data, bool $formatter):string ;
}