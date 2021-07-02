<?php

declare(strict_types=1);


namespace App\Design\Struct\Combination;

use App\Design\Struct\Combination\Renderable;

class Form implements Renderable
{
    /**
     * @param $elements = []
     */
    protected $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    /**
     * @param mixed $elements
     */
    public function addElement(Renderable $elements)
    {
        $this->elements[] = $elements;
    }

}