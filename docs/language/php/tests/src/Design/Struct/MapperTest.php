<?php

declare(strict_types=1);


namespace App\tests\src\Design\Struct;

use InvalidArgumentException;
use App\Design\Struct\Mapper\StorageAdapter;
use App\Design\Struct\Mapper\User;
use App\Design\Struct\Mapper\UserMapper;
use PHPUnit\Framework\TestCase;

class MapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'qingchen', 'email' => '1096392101@qq.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}