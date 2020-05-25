<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:09 上午
 */

namespace App\Design\Struct\Adapter;


class EbookAdapter implements Book
{
    /** @var Ebook $ebook */
    protected $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage():int
    {
        return $this->ebook->getPage()[0];
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }
}