<?php

declare(strict_types=1);


namespace App\Design\Struct\Decorator;


class WiFi extends BookingDecorator
{
    protected const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}