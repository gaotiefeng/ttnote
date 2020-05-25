<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Visitor;


class RoleVisitor implements RoleVisitorInterface
{
    private $visited = [];

    public function visitGroup(Group $group)
    {
       $this->visited[] = $group;
    }

    public function visitUser(User $user)
    {
        $this->visited[] = $user;
    }

    /**
     * @return array
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}