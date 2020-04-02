<?php


namespace App\Factory\abstractFactory;


class UnixWriteFactory implements WriteFactory
{
    public function CreateJsonWrite(): JsonWrite
    {
        return new UnixJsonWrite();
    }

    public function CreateCsvWriter(): CsvWrite
    {
        return new UnixCscWrite();
    }
}