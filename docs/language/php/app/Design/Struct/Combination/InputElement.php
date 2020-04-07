<?php

declare(strict_types=1);


namespace App\Design\Struct\Combination;


class InputElement implements Renderable
{
    protected $val;

    public function __construct(string $val)
    {
        $this->val = $val;
    }

    public function render(): string
    {
        return '<input type="text" value="'.$this->val.'" />';
    }
}