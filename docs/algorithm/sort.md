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
public String  bubbleSort()
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
func bubbleSort(arr []int) []int{
	length := len(arr)
	for i := 0; i < length - 1 ; i++  {
		for j:= 0; j< length - 1 -i ;j++  {
			if arr[j] > arr[j+1] {
				var them = arr[j]
				arr[j] = arr[j+1]
				arr[j+1] = them
				//arr[j], arr[j+1] = arr[j+1], arr[j]
			}
		}
	}

	return arr
}
```

## 选择排序
- 选择排序是一种简单直观的排序算法，无论什么数据进去都是 O(n²) 的时间复杂度。
- 所以用到它的时候，数据规模越小越好。唯一的好处可能就是不占用额外的内存空间了吧。
###### 步骤 
- 首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置
- 再从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾。
- 重复第二步，直到所有元素均排序完毕。

```php
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
```

## 插入排序

## 希尔排序

## 归并排序

## 快速排序

## 堆排序

## 计数排序

## 桶排序

## 基数排序
