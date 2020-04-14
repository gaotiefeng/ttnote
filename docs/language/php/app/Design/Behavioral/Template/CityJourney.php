<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Template;


class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift()
    {
        return "Buy a gift";
    }
}