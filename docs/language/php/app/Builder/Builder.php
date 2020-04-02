<?php


namespace App\Builder;

/** 抽象建造者 */
interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle():Vehicle;
}