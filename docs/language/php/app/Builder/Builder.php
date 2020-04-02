<?php


namespace App\Builder;


interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle():Vehicle;
}