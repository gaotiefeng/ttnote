<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/4
 * Time: 2:53 下午
 */

namespace App\Design\Create\Prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category ='Foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}