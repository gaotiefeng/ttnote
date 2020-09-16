<?php


namespace App\Database\Es;


use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

abstract class ElasticClient
{
    protected string $index;

    protected string $type;

    protected Client $client;

    public function getClient()
    {
        $this->client = ClientBuilder::create()->setHosts(["127.0.0.1:9200"])->build();
    }

    /**
     * 判断索引是否存在
     * @return bool|string
     */
    public function indexIsExists(){
        try{
            $params = [
                "index" => $this->index
            ];
            $response = $this->client->indices()->exists($params);
        }catch (\Exception $e){
            $response = $e->getMessage();
        }
        return $response;
    }

    /**
     * 创建索引
     * @return array|string
     */
    public function createIndex()
    {
        try {
            $params = [
                "index" => $this->index
            ];
            $response = $this->client->indices()->create($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    /**
     * 设置存储结构
     * @param $data
     * @return array|string
     */
    public function setMapping($data)
    {
        try {
            $mapParam = [];
            foreach ($data as $field => $field_type) {
                echo $field_type;
                $mapParam[$field] = [
                    "type" => $field_type,
                    "analyzer" => "ik_max_word",
                    "search_analyzer" => "ik_max_word"
                ];
            }
            $params = [
                "index" =>  $this->index,
                "type" => $this->type,
                "body" => [
                    $this->type => [
                        "properties" => $mapParam
                    ]
                ]
            ];

            $response = $this->client->indices()->putMapping($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
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