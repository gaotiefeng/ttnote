<?php

declare(strict_types=1);

namespace App\tests\src\Design\Struct;

use App\Design\Struct\Bridging\HelloWorldService;
use App\Design\Struct\Bridging\HtmlFormatter;
use App\Design\Struct\Bridging\PlainTextFormatter;

class BridgingTest extends \PHPUnit\Framework\TestCase
{
    public function testStructBridgingHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>hello world</p>', $service->get());
    }

    public function testStructBridgingPlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('hello world', $service->get());
    }

    public function testStructBridgingPingService()
    {
        $service = new \App\Design\Struct\Bridging\PingService(new PlainTextFormatter());

        $this->assertSame('ping',$service->get());
    }
}