<?php

declare(strict_types=1);


namespace App\Design\Struct\Decorator;


class ExtraBed extends BookingDecorator
{
    protected const PRICE = 50;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}