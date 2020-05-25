<?php


namespace App\Factory\abstractFactory;


class WinJsonWrite implements JsonWrite
{
    public function write(array $data, bool $formatter): string
    {
        $option = 0;
        if ($formatter) {
            $option = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $option);
    }
}