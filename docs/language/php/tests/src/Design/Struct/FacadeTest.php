<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;


use App\Design\Struct\Facade\Bios;
use App\Design\Struct\Facade\Facade;
use App\Design\Struct\Facade\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacadeOn()
    {
        $os = $this->createMock(OperatingSystem::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);

        $bios->method('launch')
            ->with($os);


        $facade = new Facade($os, $bios);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}