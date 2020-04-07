<?php


namespace App\Design\Create\Builder;

use App\Design\Create\Builder\Builder;
use App\Design\Create\Builder\Part\Car;
use App\Design\Create\Builder\Part\Doors;
use App\Design\Create\Builder\Part\Engine;
use App\Design\Create\Builder\Part\Wheel;

/** 具体建造者 */
class CarBuilder implements Builder
{
    /** @var Car  */
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addDoors()
    {
        $this->car->setPart('doors',new Doors());
    }

    public function addWheel()
    {
        $this->car->setPart('wheel', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}