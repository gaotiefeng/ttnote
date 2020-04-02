<?php


namespace App\Factory\abstractFactory;


interface WriteFactory
{
    public function CreateJsonWrite():JsonWrite;

    public function CreateCsvWriter():CsvWrite;
}