<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;


use App\Design\Struct\Decorator\DoubleRoomBooking;
use App\Design\Struct\Decorator\ExtraBed;
use App\Design\Struct\Decorator\WiFi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecoratorDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(100, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    public function testDecoratorDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertSame(102, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());
    }

    public function testDecoratorDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(152, $booking->calculatePrice());
        $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
    }
}