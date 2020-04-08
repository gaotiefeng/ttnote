<?php

declare(strict_types=1);


namespace App\Design\Struct\Proxy;


interface BankAccount
{
    public function deposit(int $amount);

    public function getBalance(): int;
}