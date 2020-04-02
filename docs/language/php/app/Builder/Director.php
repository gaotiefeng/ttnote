<?php
declare(strict_types=1);


namespace App\Builder;


class Director
{
    public function build(Builder $bulider)
    {
        $bulider->createVehicle();
        $bulider->addDoors();
        $bulider->addEngine();
        $bulider->addWheel();

        return $bulider->getVehicle();
    }
}