<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/4
 * Time: 2:14 下午
 */

namespace App\Design\Create\Instance;


class Singleton
{
    private static $instance;

    public static function getInstance() :Singleton
    {
        if (self::$instance === null)
        {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}