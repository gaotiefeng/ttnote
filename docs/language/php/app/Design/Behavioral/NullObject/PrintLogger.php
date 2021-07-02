<?php

declare(strict_types=1);


namespace App\Design\Behavioral\NullObject;


class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}