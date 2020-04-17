# 算法

## 冒泡排序
>Bubble Sort 简单直观的排序算法。
>重复的走访要排序的数列，`一次比较两个元素`
>顺序错误就交换过来
>走访数列的工作是重复地进行直到没有再需要交换，也就是说该数列已经排序完成。
>这个算法的名字由来是因为越小的元素会经由交换慢慢“浮”到数列的顶端。

## 比较相邻的两个值，可以根据 < > 来做升序降序

- php代码

```php
public function bubbleSort(array $arr)
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
```

- java代码

```java
public String  bublleSort()
{
    int[] ns = { 28, 12, 89, 73, 65, 18, 96, 50, 8, 36 };
    // 排序前:
    System.out.println(Arrays.toString(ns));
    System.out.println(ns.length);
    for (int i = 0; i < ns.length - 1; i++) {
        for (int j = 0; j < ns.length - i - 1; j++) {
            //可以根据 < > 来做升序降序
            if (ns[j] < ns[j+1]) {
                // 交换ns[j]和ns[j+1]:
                int tmp = ns[j];
                ns[j] = ns[j+1];
                ns[j+1] = tmp;
            }
        }
    }
    // 排序后:
    System.out.println(Arrays.toString(ns));
    return  Arrays.toString(ns);
}
```

- go代码

```go

```

## 插入排序
- 它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入。
- 插入排序和冒泡排序一样，也有一种优化算法，叫做拆半插入。
