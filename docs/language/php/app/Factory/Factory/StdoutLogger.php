<?php


namespace App\Factory\Factory;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}