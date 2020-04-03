<?php declare(strict_types=1);


namespace App\Factory\Factory;


class FileLogger implements Logger
{
    protected $file_path;

    public function __construct(string $file_path)
    {
        $this->file_path = $file_path;
    }

    public function log(string $message)
    {
        file_put_contents($this->file_path,$message.PHP_EOL,FILE_APPEND);
        echo $this->file_path;
    }
}