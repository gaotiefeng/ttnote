<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Mediator;


abstract class Colleague
{
    /** @var Mediator $Mediator */
    protected $mediator;

    /**
     * @param Mediator $Mediator
     */
    public function setMediator(Mediator $Mediator): void
    {
        $this->mediator = $Mediator;
    }
}