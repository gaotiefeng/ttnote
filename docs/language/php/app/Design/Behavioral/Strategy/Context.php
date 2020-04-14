<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Strategy;


class Context
{
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements) : array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }

    /**
     * @return ComparatorInterface
     */
    public function getComparator(): ComparatorInterface
    {
        return $this->comparator;
    }
}