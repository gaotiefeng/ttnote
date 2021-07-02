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
        for ($i=20;$i<=40;$i++) {
            $data[$i]['id'] = $i+1;
            $data[$i]['title'] = 'tests '.$i;
            $data[$i]['test'] = $i.rand(0,9);
            $data[$i]['content'] = 'test内容wewr33'.$i;
            $data[$i]['created_at'] = time();
        }
        $this->data = $data;
    }

    public function testEsAdd()
    {
        $es = new Elastic();
        $setMapp = $es->setMapping(['title'=>'text','content'=>'text']);

        //$res = $es->add($this->data); //添加条
        $res = $es->batchAdd($this->data); //批量添加
        //$res = $es->search(['title'=>'test2']); //搜索

        var_dump($res);
    }
}