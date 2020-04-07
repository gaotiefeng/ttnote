<?php
declare(strict_types=1);


namespace App\Design\Struct\Bridging;


class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('ping');
    }
}