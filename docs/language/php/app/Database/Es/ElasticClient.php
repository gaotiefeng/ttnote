<?php


namespace App\Database\Es;


use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

abstract class ElasticClient
{
    protected string $index;

    protected string $type;

    protected Client $client;

    public function init()
    {
        $this->client = ClientBuilder::create()->setHosts(["127.0.0.1:9200"])->build();
    }
    /**
     * @param string $index
     */
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}