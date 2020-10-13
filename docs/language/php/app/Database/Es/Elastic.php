<?php


namespace App\Database\Es;


class Elastic extends ElasticClient
{
    public function __construct($index = 'tf',$type = 'gg')
    {
        $this->setIndex($index);
        $this->setType($type);
        $this->getClient();
        $index = $this->indexIsExists();
        if (!$index) {
            $this->createIndex();
        }
    }

    /**
     * add one data
     * @param $data
     * @return string
     */
    public function add($data)
    {
        try {
            $params = [
                'index' =>  $this->index,
                'type' => $this->type,
            ];

            if (array_key_exists("id", $data)) {
                $params["id"] = $data["id"];
            }

            $params["body"] = $data;
            $response = $this->client->index($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    /**
     * batchAdd data
     * @param $data
     * @return string
     */
    public function batchAdd($data){
        try {
            foreach ($data as $one){
                $params["body"][] = [
                    'index' =>  [
                        "_index" => $this->index,
                        "_type" => $this->type,
                        "_id" =>  $one["id"]
                    ]
                ];
                $params["body"][] = $one;
            }

            $response = $this->client->bulk($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    /**查询文档 (分页，排序，权重，过滤)
     * @param $data
     * @param int $pageIndex
     * @param int $pageSize
     * @return string
     */
    public function search($data, $pageIndex = 0, $pageSize = 100)
    {
        try {
            $params = [
                'index' => $this->index,
                'type' => $this->type,
            ];

            $field = key($data);
            $query = [
                "match" => [
                    $field => [
                        "query" => $data[$field],
                        "minimum_should_match" => 2
                    ]
                ]
            ];
            $params["body"]["query"] = $query;
            $params["body"]["size"] = $pageSize;
            $params["body"]["from"] = $pageIndex;
            $res = $this->client->search($params);
            foreach ($res["hits"]["hits"] as $hit) {
                $response["data"][] = array(
                    "id" => $hit["_id"],
                    "title" => $hit["_source"]["title"],
                    "content" => $hit["_source"]["content"],
                    "created_at" => $hit["_source"]["created_at"]);
            }
            $response["total"] = $res["hits"]["total"];

        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    // 判断数据存在
    public function dataIsExists($id)
    {
        try {
            $params = [
                'index' =>  $this->index,
                'type' => $this->type,
                'id' => $id
            ];

            $response = $this->client->exists($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    // 获取指定数据
    public function get($id)
    {
        try {
            $params = [
                'index' =>  $this->index,
                'type' => $this->type,
                'id' => $id
            ];

            $response = $this->client->get($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }

    // 更新数据
    public function update($id, $mod_info)
    {
        // 可以灵活添加新字段,最好不要乱添加
        try {
            $params = [
                'index' =>  $this->index,
                'type' => $this->type,
                'id' => $id,
                'body' => [
                    'doc' => $mod_info
                ]
            ];
            $response = $this->client->update($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }

        return $response;
    }


    // 删除数据
    public function delete($id)
    {
        try {
            $params = [
                'index' =>  $this->index,
                'type' => $this->type,
                'id' => $id
            ];
            $response = $this->client->delete($params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }
        return $response;
    }
}