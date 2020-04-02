<?php


namespace App\Factory\abstractFactory;


class WinCsvWrite implements CsvWrite
{


    public function write(array $data): string
    {
        return join("-",$data);
    }
}