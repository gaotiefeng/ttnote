<?php
declare(strict_types=1);


namespace App\Design\Struct\Bridging;


abstract class Service
{
    /** @var Formatter $formatter */
    protected $implementation;

    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get() :string ;
}