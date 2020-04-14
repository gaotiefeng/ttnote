<?php

declare(strict_types=1);


namespace App\Design\Behavioral\State;


abstract class StateOrder
{
    /**
     * @var array
     */
    private $details;

    /** @var StateOrder $state */
    protected static $state;

    abstract protected function done();

    protected function setStates(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updatedTime'] = time();
    }

    protected function getStatus(): string
    {
        return $this->details['status'];
    }
}