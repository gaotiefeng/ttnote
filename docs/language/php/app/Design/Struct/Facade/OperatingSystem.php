<?php


namespace App\Design\Struct\Facade;


interface OperatingSystem
{
    public function halt();//停止

    public function getName() :string ;
}