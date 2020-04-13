<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Specification;


class AndNotSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface[]
     */
    protected $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
        return true;
    }
}