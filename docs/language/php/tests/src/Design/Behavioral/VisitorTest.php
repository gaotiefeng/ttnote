<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\Visitor\Group;
use App\Design\Behavioral\Visitor\Role;
use App\Design\Behavioral\Visitor\RoleVisitor;
use App\Design\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    public function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Qin')],
            [new Group('Admin')],
            ];
    }

    /**
     *
     * @param Role $role
     */
    public function testVisitor(Role $role)
    {
        $role->accept($this->visitor);

        $this->assertSame($role,$this->visitor->getVisited()[0]);
    }
}