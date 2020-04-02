<?php


namespace App\Builder;

use App\Builder\Part\Doors;
use App\Builder\Part\Engine;
use App\Builder\Part\Truck;
use App\Builder\Part\Wheel;

class TruckBuilder implements Builder
{
    /** @var Truck $truck */
    private  $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addEngine()
    {
        $this->truck->setPart('engine1',new Engine());
        $this->truck->setPart('engine2',new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
    }

    public function addDoors()
    {
        $this->truck->setPart('doors', new Doors());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}