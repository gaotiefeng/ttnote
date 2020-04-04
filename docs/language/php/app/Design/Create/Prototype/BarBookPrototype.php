<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/4
 * Time: 2:52 下午
 */

namespace App\Design\Create\Prototype;


class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {

    }
}