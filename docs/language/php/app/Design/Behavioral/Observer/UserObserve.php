<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserve implements SplObserver
{
    /**
     * @var User[]
     */
    private $changedUsers;

    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return User[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}