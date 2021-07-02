<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Specification;


class PriceSpecification implements SpecificationInterface
{
    /**
     * @var float
     */
    private $max_price;
    /**
     * @var float
     */
    private $min_price;

    public function __construct(float $min_price,float $max_price)
    {
        $this->max_price = $max_price;
        $this->min_price = $min_price;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->max_price !== null && $item->getPrice() > $this->max_price) {
            return false;
        }
        if ($this->min_price !== null && $item->getPrice() < $this->min_price) {
            return false;

        }

        return true;
    }
}