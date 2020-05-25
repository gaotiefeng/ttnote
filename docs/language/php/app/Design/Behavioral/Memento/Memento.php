<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Memento;


class Memento
{
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}