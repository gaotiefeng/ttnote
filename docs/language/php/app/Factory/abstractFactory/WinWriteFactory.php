<?php


namespace App\Factory\abstractFactory;


class WinWriteFactory implements WriteFactory
{
    public function CreateCsvWriter(): CsvWrite
    {
        return New WinCsvWrite();
    }

    public function CreateJsonWrite(): JsonWrite
    {
        return New WinJsonWrite();
    }
}