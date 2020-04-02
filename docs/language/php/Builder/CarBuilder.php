<?php


namespace Php\Builder;

use Php\Builder\Builder;
use Php\Builder\Part\Car;
use Php\Builder\Part\Doors;
use Php\Builder\Part\Engine;
use Php\Builder\Part\Wheel;

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