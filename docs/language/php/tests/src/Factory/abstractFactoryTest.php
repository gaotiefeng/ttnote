<?php

namespace App\tests\src\Factory;

use App\Factory\abstractFactory\CsvWrite;
use App\Factory\abstractFactory\JsonWrite;
use App\Factory\abstractFactory\UnixWriteFactory;
use App\Factory\abstractFactory\WinWriteFactory;
use App\Factory\abstractFactory\WriteFactory;
use \PHPUnit\Framework\TestCase;

class abstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriteFactory()],
            [new WinWriteFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param WriteFactory $writerFactory
     */
    public function testFactory(WriteFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWrite::class, $writerFactory->CreateJsonWrite());
        $this->assertInstanceOf(CsvWrite::class, $writerFactory->CreateCsvWriter());
    }
}