<?php declare(strict_types=1);

/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/6
 * Time: 6:01 下午
 */

use App\Design\Create\StaticFactory\NumberFormatter;
use App\Design\Create\StaticFactory\StaticFactory as fomatterFactory;
use App\Design\Create\StaticFactory\StringFormatter;

class StaticFactoryTest extends \PHPUnit\Framework\TestCase
{

    public function testStaticNumberFormatter()
    {
        $this->assertInstanceOf(NumberFormatter::class, fomatterFactory::factory('number'));
    }

    public function testStaticStringFormatter()
    {
        $this->assertInstanceOf(StringFormatter::class, fomatterFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        fomatterFactory::factory('object');
    }
}