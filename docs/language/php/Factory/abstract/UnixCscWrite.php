<?php


namespace php;


class UnixCscWrite implements CsvWrite
{
    public function write(array $data): string
    {
        return join('unix-',$data);
    }
}