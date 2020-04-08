<?php

declare(strict_types=1);


namespace App\Design\Struct\Flyweight;

use Countable;

class TextFactory implements Countable
{
    /**
     * @var Text[]
     */
    private $charPool = [];

    public function get(string $name) : Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    public function create(string $name)
    {
        if (strlen($name) == 1) {
            return new Character($name);
        }else{
            return new Word($name);
        }
    }

    public function count() : int
    {
        return count($this->charPool);
    }
}