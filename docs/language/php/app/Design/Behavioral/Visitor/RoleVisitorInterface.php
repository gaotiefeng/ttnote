<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Visitor;


interface  RoleVisitorInterface
{
    public function visitUser(User $user);

    public function visitGroup(Group $group);
}