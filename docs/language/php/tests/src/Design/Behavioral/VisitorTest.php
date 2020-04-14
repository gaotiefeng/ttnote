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
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitorRole(Role $role)
    {
        $role->accept($this->visitor);

        $this->assertSame($role,$this->visitor->getVisited()[0]);
    }

    public function testVisitorUser()
    {
        $role = new User('VIS');
        $role->accept($this->visitor);
        $name = $role->getName();
        $this->assertSame("User VIS",$name);
        $this->assertSame($role,$this->visitor->getVisited()[0]);
    }
}