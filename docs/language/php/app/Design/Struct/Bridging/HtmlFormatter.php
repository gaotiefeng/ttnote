<?php
declare(strict_types=1);


namespace App\Design\Struct\Bridging;


class HtmlFormatter implements Formatter
{
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>',$text);
    }
}