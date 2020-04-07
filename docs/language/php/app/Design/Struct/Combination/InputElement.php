<?php

declare(strict_types=1);


namespace App\Design\Struct\Combination;


class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}