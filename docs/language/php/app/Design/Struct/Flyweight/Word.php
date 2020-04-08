<?php

declare(strict_types=1);


namespace App\Design\Struct\Flyweight;


class Word implements Text
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}