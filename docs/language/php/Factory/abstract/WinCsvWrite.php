<?php


namespace php;


class WinCsvWrite implements CsvWrite
{


    public function write(array $data): string
    {
        return join("-",$data);
    }
}