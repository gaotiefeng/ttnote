<?php declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: 1096392101@qq.com
 * Date: 2020/4/3
 * Time: 11:32 上午
 */

namespace App\Purpose;

use Countable;

class WorkerPool implements Countable
{
    /**
     * @var StringReversWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReversWorker[]
     */
    private $freeWorkers = [];

    public function get(): StringReversWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReversWorker();
        }else {
            $worker = array_pop($this->freeWorkers);
        }
        ##spl_object_hash — 返回指定对象的hash id
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function dispose(StringReversWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key]))
        {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count():int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}