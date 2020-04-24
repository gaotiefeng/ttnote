<?php

declare(strict_types=1);


namespace App\Algorithm;


class Sort
{
    /**
     * 冒泡排序
     * @param array $arr
     * @return array
     */
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

    /**
     * 选择排序
     * @param array $arr
     * @return array
     */
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

    public function insertSort(array $arr)
    {
        $len = count($arr);
        for ($i = 1; $i< $len; $i++) {
            $preIndex = $i - 1;
            $current = $arr[$i];
            while ($preIndex >= 0 && $arr[$preIndex] > $current) {
                $arr[$preIndex+1] = $arr[$preIndex];
                $preIndex--;
            }
            $arr[$preIndex+1] = $current;
        }
        return $arr;
    }

    public function quickSort(array $arr)
    {
        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }
        $pivot = $arr[0];
        $leftArray = [];
        $rightArray = [];
        for ($i = 1;$i < $length;$i++) {
            if ($arr[$i] > $pivot) {
                $rightArray[] = $arr[$i];
            }else {
                $leftArray[] = $arr[$i];
            }
        }

        $leftArray = $this->quickSort($leftArray);
        $rightArray[] = $pivot;
        $rightArray = $this->quickSort($rightArray);

        return array_merge($leftArray,$rightArray);
    }
}