<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Command;


class Invoker
{
    /** @var Command $command */
    private $command;

    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}