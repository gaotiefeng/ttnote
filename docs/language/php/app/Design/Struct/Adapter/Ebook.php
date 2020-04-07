<?php
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:07 上午
 */

namespace App\Design\Struct\Adapter;


interface Ebook
{
    public function unlock();

    public function pressNext();

    public function getPage() : array ;
}