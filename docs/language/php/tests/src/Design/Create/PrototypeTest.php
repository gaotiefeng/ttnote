<?php declare(strict_types=1);

/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/4
 * Time: 2:55 下午
 */

use App\Design\Create\Prototype\FooBookPrototype;
use App\Design\Create\Prototype\BarBookPrototype;


class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}