<?php
declare(strict_types=1);


namespace App\tests\src;


use App\Json;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testJsonString()
    {
        $json = '{ "a": [ { "b": "c" }, "d" ,{ "cc": "gg" },"e"], "x": 1, "y": 4,"b": [ { "b": "c" }, "d" ,{ "bb": "ee" },"e"]}';

        $jsonClass = new Json($json);

        $x = $jsonClass->get($json,"x");
        $this->assertSame(1,$x);

        $a = $jsonClass->get($json, "a[1]");
        $this->assertSame('d',$a);

        $b = $jsonClass->get($json, "a[0].b");
        $this->assertSame('c',$b);

        $e = $jsonClass->get($json, "a[2].cc");
        $this->assertSame('gg',$e);

        $bb = $jsonClass->get($json, "b[2].bb");
        $this->assertSame('ee',$bb);

    }
}