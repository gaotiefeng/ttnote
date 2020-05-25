<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;


use InvalidArgumentException;
use App\Design\Struct\Registry\Registry;
use App\Design\Struct\Registry\Service;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /**
     * @var Service
     */
    private  $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testRegisterSetAndGetLogger()
    {
        //$this->service = new Service();

        Registry::set(Registry::LOGGER, $this->service);

        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testRegisterSet()
    {
        $this->expectException(InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

    public function testRegisterGet()
    {

        $this->expectException(InvalidArgumentException::class);

        Registry::get('121212');

    }
}