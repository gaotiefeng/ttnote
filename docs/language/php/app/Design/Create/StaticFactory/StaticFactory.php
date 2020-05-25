<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/6
 * Time: 5:52 下午
 */

namespace App\Design\Create\StaticFactory;


use InvalidArgumentException;
use Swoole\Exception;

class StaticFactory
{
    public static function factory(string $name)
    {
        $Formatter = new StringFormatter();
        switch ($name) {
            case 'number';
            $Formatter =  new NumberFormatter();
            break;
            case 'string';
            $Formatter =  new StringFormatter();
            break;
            default;
                throw new InvalidArgumentException('Unknown format given');
        }
       return $Formatter;
        /*if ($name == 'number') {
            return  new NumberFormatter();
        }else if($name =='string') {
            return  new StringFormatter();
        }
        throw new InvalidArgumentException('Unknown format given');*/
    }
}