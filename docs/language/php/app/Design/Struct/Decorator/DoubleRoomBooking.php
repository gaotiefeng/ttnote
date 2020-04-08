<?php

declare(strict_types=1);


namespace App\Design\Struct\Decorator;


class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 100;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}