<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Command;


class HelloCommand implements Command
{
    /** @var Receiver $output */
    protected $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}