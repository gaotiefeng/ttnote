<?php

declare(strict_types=1);


namespace App\Design\Struct\Mapper;


class User
{
    /** @var String $username */
    protected $username;

    /** @var String $email */
    protected $email;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(array $state): User
    {
        return new self($state['username'],$state['email']);
    }
    /**
     * @return String
     */
    public function getUsername(): String
    {
        return $this->username;
    }

    /**
     * @return String
     */
    public function getEmail(): String
    {
        return $this->email;
    }
}