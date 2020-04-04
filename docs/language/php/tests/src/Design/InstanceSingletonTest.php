<?php
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/4
 * Time: 2:18 下午
 */

use PHPUnit\Framework\TestCase;
use App\Instance;

class InstanceSingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Instance\Singleton::getInstance();
        $secondCall = Instance\Singleton::getInstance();

        $this->assertInstanceOf(Instance\Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    public function testaads()
    {
    }
}