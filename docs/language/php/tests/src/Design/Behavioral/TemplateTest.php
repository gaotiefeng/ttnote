<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\Template\BeachJourney;
use App\Design\Behavioral\Template\CityJourney;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    public function testTemplateBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeTrip();

        $this->assertEquals(['Buy a flight ticket',
            'Taking the plane',
            'Swimming and sun-bathing',
            'Taking the plane'],$beachJourney->getThingsToDo());
    }

    public function testTemplateCity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeTrip();

        $this->assertEquals(['Buy a flight ticket',
            'Taking the plane',
            'Eat, drink, take photos and sleep',
            'Buy a gift',
            'Taking the plane'],$cityJourney->getThingsToDo());
    }
}