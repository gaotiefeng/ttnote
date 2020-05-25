<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;


use App\Design\Struct\Coherent\Sql;
use PHPUnit\Framework\TestCase;

class CoherentTest extends TestCase
{
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}