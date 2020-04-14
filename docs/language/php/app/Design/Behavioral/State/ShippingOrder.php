<?php

declare(strict_types=1);


namespace App\Design\Behavioral\State;


class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStates('shipping');
    }

    protected function done()
    {
        $this->setStates('completed');
    }
}