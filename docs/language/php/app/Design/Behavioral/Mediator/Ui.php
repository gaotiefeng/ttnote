<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Mediator;


class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}