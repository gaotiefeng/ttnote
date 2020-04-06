<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/6
 * Time: 5:53 下午
 */

namespace App\Design\Create\StaticFactory;

use App\Design\Create\StaticFactory\Formatter;

class NumberFormatter implements Formatter
{
    public function format(string $input):string
    {
        return 'number';
    }
}