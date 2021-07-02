<?php
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:03 上午
 */

namespace App\Design\Struct\Adapter;


interface Book
{
    public function open();

    public function turnPage();

    public function getPage();
}