<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Mediator;


interface Mediator
{
    public function getUser(string $username):string ;
}