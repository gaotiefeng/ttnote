<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Command;


class Receiver
{
    /** @var bool  */
    private $enableDate = false;

    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' ['.date("Y-m-d").']';
        }
        $this->output[] = $str;
    }

    public function getOutput():string
    {
        return join('\n',$this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}