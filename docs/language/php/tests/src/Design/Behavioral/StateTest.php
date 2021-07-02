<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\State\ContextOrder;
use App\Design\Behavioral\State\CreateOrder;
use App\Design\Behavioral\State\ShippingOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testStateShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }

    public function testStateCompleteShippedOrder()
    {
        $order = new ShippingOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}