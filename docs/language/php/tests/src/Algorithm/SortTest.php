<?php

declare(strict_types=1);


namespace App\tests\src\Algorithm;


use App\Algorithm\Sort;
use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    protected $sort;

    public function setUp()
    {
        $this->sort = new Sort();
    }

    protected $data = [
        28, 12, 89, 73, 65, 18, 96, 50, 8, 36
    ];

    public function testBubbleSort()
    {
        $res = $this->sort->bubbleSort($this->data);

        $this->assertSame(8,$res[0]);
    }

    public function testSelectSort()
    {
        $res = $this->sort->selectSort($this->data);

        $this->assertSame(8,$res[0]);
    }
}