<?php


namespace App\tests\src\Design\Create;


use App\Design\Create\Builder\CarBuilder;
use App\Design\Create\Builder\Director;
use App\Design\Create\Builder\Part\Car;
use App\Design\Create\Builder\Part\Truck;
use App\Design\Create\Builder\TruckBuilder;
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