<?php

declare(strict_types=1);


namespace App\Design\Struct\Proxy;


class HeavyBankAccount implements BankAccount
{
    private $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        return (int)array_sum($this->transactions);
    }
}