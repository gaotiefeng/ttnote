<?php

declare(strict_types=1);


namespace App\Algorithm;


class Sort
{

    public function bubbleSort(array $arr):array
    {
        $length = count($arr);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }

        return $arr;
    }

    public function selectSort(array $arr)
    {
        $length = count($arr);
        for ($i = 0; $i < $length - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
        return $arr;
    }
}