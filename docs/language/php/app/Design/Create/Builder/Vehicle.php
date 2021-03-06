<?php declare(strict_types=1);


namespace App\Design\Create\Builder;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}