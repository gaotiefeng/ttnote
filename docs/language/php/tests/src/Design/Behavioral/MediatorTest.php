<?php

declare(strict_types=1);


namespace App\tests\src\Design\Behavioral;


use App\Design\Behavioral\Mediator\Ui;
use App\Design\Behavioral\Mediator\UserRepository;
use App\Design\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediatorOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}