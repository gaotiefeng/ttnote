<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Chain;


use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello World!';
    }
}