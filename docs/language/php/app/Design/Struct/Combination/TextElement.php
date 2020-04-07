<?php

declare(strict_types=1);


namespace App\Design\Struct\Combination;


class TextElement implements Renderable
{
    protected $text;

    public function __construct(string $input)
    {
        $this->text = $input;
    }

    public function render(): string
    {
        return $this->text;
    }
}