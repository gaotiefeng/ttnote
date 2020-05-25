<?php

declare(strict_types=1);

namespace App;

class Json
{
    /** @var string $json */
    protected $json;

    public function __construct(string $json)
    {
        $this->json = $json;
    }

    public function get(string $json,string $para)
    {
        if (empty($json)) {
            $json = $this->json;
        }
        $next = substr_count($para, '.');
        $data = json_decode($json, true);
        if ($next === 0) {
            $number = substr_count($para, '[');
            if ($number === 0) {
                return $data[$para];
            } else {
                $str_start = substr($para, 0, strpos($para, '['));
                $str_end = ltrim(strstr(substr($para, 0, strpos($para, ']')), '[',), '[');
                return $data[$str_start][$str_end];
            }
        } else {
            $str_start = substr($para, 0, strpos($para, '['));
            $str_next = ltrim(strstr(substr($para, 0, strpos($para, ']')), '[',), '[');
            [$arr, $key] = explode('.', $para);
            $str_end = $key;
            return $data[$str_start][$str_next][$str_end];
        }
    }
}