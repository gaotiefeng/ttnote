<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Mediator;


class UserRepositoryUiMediator implements Mediator
{
    /** @var UserRepository $userRepository */
    private $userRepository;
    /** @var Ui $ui */
    private $ui;

    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}