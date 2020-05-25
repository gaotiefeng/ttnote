<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:05 上午
 */

namespace App\Design\Struct\Adapter;


class PaperBook implements Book
{
    protected $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage()
    {
        return $this->page;
    }
}