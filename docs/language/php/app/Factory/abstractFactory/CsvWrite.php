<?php


namespace App\Factory\abstractFactory;


interface CsvWrite
{
    public function write(array $data):string;
}