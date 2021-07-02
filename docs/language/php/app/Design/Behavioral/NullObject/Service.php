<?php

declare(strict_types=1);


namespace App\Design\Behavioral\NullObject;


class Service
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in '.__METHOD__);
    }
}