<?php declare(strict_types=1);

/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/7
 * Time: 9:20 上午
 */

namespace App\tests\src\Design\Struct;


use App\Design\Struct\Adapter\Kindle;
use PHPUnit\Framework\TestCase;
use App\Design\Struct\Adapter\PaperBook;
use App\Design\Struct\Adapter\EbookAdapter;

class AdapterTest extends TestCase
{
    public function testAdapterPaperBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }

    public function testAdapterEbook()
    {
        $kindle = new Kindle();
        $ebook = new EbookAdapter($kindle);
        $ebook->open();
        $ebook->turnPage();

        $this->assertSame(2,$ebook->getPage());
    }
}