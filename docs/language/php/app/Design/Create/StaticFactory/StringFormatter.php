<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/6
 * Time: 5:56 下午
 */

namespace App\Design\Create\StaticFactory;


class StringFormatter implements Formatter
{
    public function format(string $input): string
    {
        return 'string';
    }
}