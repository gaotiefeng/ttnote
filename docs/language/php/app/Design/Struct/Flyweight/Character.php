<?php

declare(strict_types=1);


namespace App\Design\Struct\Flyweight;


class Character implements Text
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        return sprintf('Character %s with font %s',$this->name,$font);
    }
}