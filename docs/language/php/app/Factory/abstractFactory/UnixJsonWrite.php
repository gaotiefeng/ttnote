<?php


namespace App\Factory\abstractFactory;


class UnixJsonWrite implements JsonWrite
{
    public function write(array $data, bool $formatter): string
    {
        $option = 0;

        if ($formatter) {
            $option = JSON_PRESERVE_ZERO_FRACTION;
        }

        return json_encode($data,$option);
    }

}