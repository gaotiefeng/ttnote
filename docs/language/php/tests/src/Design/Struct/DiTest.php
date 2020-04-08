<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;


use App\Design\Struct\Di\DatabaseConfiguration;
use App\Design\Struct\Di\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DiTest extends TestCase
{
    public function testDi()
    {
        $config = new DatabaseConfiguration('127.0.0.1',9501,'root','123456');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:123456@127.0.0.1:9501',$connection->getConfig());
    }
}