<?php

namespace App\Design\Struct\Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}