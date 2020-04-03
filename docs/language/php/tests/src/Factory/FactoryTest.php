<?php


namespace App\tests\src\Factory;


use App\Factory\Factory\FileLogger;
use App\Factory\Factory\FileLoggerFactory;
use App\Factory\Factory\Logger;
use App\Factory\Factory\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testFactoryCreateStdoutLogger()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(Logger::class,$logger);
    }

    public function testFactoryCreateFileLogger()
    {
        $loggerFactory = new FileLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->log(date('Y-m-d H:i:s') .' request->'.round(1212));

        $this->assertInstanceOf(FileLogger::class,$logger);
    }
}