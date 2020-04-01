<?php


namespace php;


interface CsvWrite
{
    public function write(array $data):string;
}