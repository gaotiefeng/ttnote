<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\NullObject\NullLogger;
use App\Design\Behavioral\NullObject\PrintLogger;
use App\Design\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $NullObject = new NullLogger();
        $Service = new Service($NullObject);
        $null = $Service->doSomething();
        $this->expectOutputString('');
    }

    public function testNullPrint()
    {
        $PrintLogger = new PrintLogger();
        $Service = new Service($PrintLogger);
        $Service->doSomething();
        $this->expectOutputString('We are in App\Design\Behavioral\NullObject\Service::doSomething');
    }

}