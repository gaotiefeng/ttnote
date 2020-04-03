<?php


namespace App\Factory\Factory;


class FileLoggerFactory implements LoggerFactory
{
    protected $file_path;

    public function __construct($file_path = '')
    {
        if ($file_path == '') {
            $file_path = __DIR__.'/../../../runtime/logs';
            if (!is_dir($file_path)) {
                mkdir($file_path,0777,true);
            }
            $file_path .= '/file.log';
        }

        $this->file_path = $file_path;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->file_path);
    }
}