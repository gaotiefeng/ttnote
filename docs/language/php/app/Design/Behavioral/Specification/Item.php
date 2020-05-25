<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Specification;


class Item
{
    /**
     * @var float
     */
    protected $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}