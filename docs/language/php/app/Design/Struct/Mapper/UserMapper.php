<?php

declare(strict_types=1);


namespace App\Design\Struct\Mapper;

use InvalidArgumentException;

class UserMapper
{
    /** @var StorageAdapter $storageAdapter */
    private $storageAdapter;

    public function __construct(StorageAdapter $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function findById(int $id)
    {
        $result = $this->storageAdapter->find($id);

        if ($result == null) {
            throw new InvalidArgumentException("user $id not found");
        }

        return $this->mapRowToUser($result);
    }

    public function mapRowToUser(array $row) : User
    {
        return User::fromState($row);
    }
}