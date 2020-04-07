<?php
declare(strict_types=1);


namespace App\Design\Struct\Bridging;


class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}