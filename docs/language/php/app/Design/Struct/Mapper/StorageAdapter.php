<?php

declare(strict_types=1);


namespace App\Design\Struct\Mapper;


class StorageAdapter
{
    /** @var array $data */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}