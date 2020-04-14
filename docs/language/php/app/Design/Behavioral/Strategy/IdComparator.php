<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Strategy;


class IdComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}