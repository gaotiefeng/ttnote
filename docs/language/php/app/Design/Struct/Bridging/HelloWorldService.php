<?php
declare(strict_types=1);


namespace App\Design\Struct\Bridging;


class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('hello world');
    }
}