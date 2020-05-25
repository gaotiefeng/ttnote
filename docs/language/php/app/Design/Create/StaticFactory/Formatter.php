<?php
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/6
 * Time: 5:51 下午
 */

namespace App\Design\Create\StaticFactory;


interface Formatter
{
    public function format(string $input):string;
}