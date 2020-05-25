<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Chain;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    /** @var Handler $handler */
    protected $successor;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    public function handler(RequestInterface $request): ?string
    {
        $processing = $this->processing($request);

        if ($processing === null && $this->successor !== null) {
            $processing = $this->successor->processing($request);
        }

        return $processing;
    }

    abstract protected function processing(RequestInterface $request): ?string ;
}