<?php


namespace App\tests\src\Database\Es;


use App\Database\Es\Elastic;
use PHPUnit\Framework\TestCase;

class EsTest extends TestCase
{
    protected $data;

    public function setUp()
    {
        $data = [];
        for ($i=23;$i<=40;$i++) {
            $data[$i]['id'] = $i+1;
            $data[$i]['title'] = 'test'.$i;
            $data[$i]['content'] = 'test内容'.$i;
            $data[$i]['created_at'] = time();
        }
        $this->data = $data;
    }

    public function testEsAdd()
    {
        $es = new Elastic();
        //$res = $es->add($this->data); //添加条
        //$res = $es->batchAdd($this->data); //批量添加
        $res = $es->search(['title'=>'test']);
        var_dump($res);
    }
}