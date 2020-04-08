<?php

declare(strict_types=1);


namespace App\Design\Struct\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccount
{
    private $balance = null;

    public function getBalance(): int
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }
        return $this->balance;
    }
}