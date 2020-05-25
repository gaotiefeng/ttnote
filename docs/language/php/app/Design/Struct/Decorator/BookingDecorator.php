<?php

declare(strict_types=1);


namespace App\Design\Struct\Decorator;


abstract class BookingDecorator implements Booking
{
    /** @var Booking $booking */
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}