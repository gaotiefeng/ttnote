<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Chain;


use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    /** @var array $data */
    private  $data;

    public function __construct(array $data, ?Handler $successor = null)
    {
        parent::__construct($successor);

        $this->data = $data;
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}