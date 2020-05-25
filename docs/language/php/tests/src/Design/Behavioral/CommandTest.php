<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\Command\AddMessageDateCommand;
use App\Design\Behavioral\Command\HelloCommand;
use App\Design\Behavioral\Command\Invoker;
use App\Design\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{

    public function testCommand()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        
        $invoker->run();
        var_dump($receiver->getOutput());
        $this->assertSame('Hello World\nHello World ['.date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();

        $invoker->run();
        var_dump($receiver->getOutput());
        $this->assertSame('Hello World\nHello World ['.date('Y-m-d').']\nHello World', $receiver->getOutput());
    }
}