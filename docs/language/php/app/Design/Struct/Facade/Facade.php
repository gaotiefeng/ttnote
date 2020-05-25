<?php

declare(strict_types=1);


namespace App\Design\Struct\Facade;


class Facade
{
    /** @var OperatingSystem $os */
    protected $os;

    /** @var Bios $bios */
    protected $bios;

    public function __construct(OperatingSystem $os, Bios $bios)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}