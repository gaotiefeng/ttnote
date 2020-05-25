<?php

declare(strict_types=1);


namespace App\Design\Behavioral\State;


use phpDocumentor\Reflection\Types\Static_;

class ContextOrder extends StateOrder
{
    /**
     * @return StateOrder
     */
    public static function getState(): StateOrder
    {
        return static::$state;
    }

    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }


    public function done()
    {
        static::$state->done();
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}