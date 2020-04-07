<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:17 上午
 */

namespace App\Design\Struct\Adapter;


class Kindle implements Ebook
{
    protected $page = 1;
    protected $totalPage = 10;

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPage];
    }
}