<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Observer;

use SplObserver;
use SplSubject;
use SplObjectStorage;

class User implements SplSubject
{
    /**
     * @var string
     */
    private $email;

    /** @var SplObjectStorage $observes */
    private $observes;

    public function __construct()
    {
        $this->observes = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observes->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observes->detach($observer);
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
    public function notify()
    {
        /** @var SplObserver $observe */
        foreach ($this->observes as $observe) {
            $observe->update($this);
        }
    }
}