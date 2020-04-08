<?php

declare(strict_types=1);


namespace App\Design\Struct\Di;


class DatabaseConnection
{
    /** @var DatabaseConfiguration $configuration */
    private $configuration;

    public function __construct(DatabaseConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function getConfig() :string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}