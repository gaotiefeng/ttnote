<?php


namespace php;


interface WriteFactory
{
    public function CreateJsonWrite():JsonWrite;

    public function CreateCsvWriter():CsvWrite;
}