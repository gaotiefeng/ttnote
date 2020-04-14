<?php


namespace App\Design\Behavioral\Visitor;


interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}