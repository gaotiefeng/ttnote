<?php

declare(strict_types=1);


namespace App\Design\Behavioral\State;


class CreateOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStates('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}