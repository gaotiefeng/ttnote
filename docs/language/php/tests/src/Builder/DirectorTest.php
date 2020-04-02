<?php


namespace Php\tests\src\Bulider;


use Php\Builder\CarBuilder;
use Php\Builder\Director;
use Php\Builder\Part\Car;
use Php\Builder\Part\Truck;
use Php\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testBuilderTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testBuilderCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}