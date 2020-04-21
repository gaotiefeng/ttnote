# 算法
[算法](https://sort.hust.cc)

## 冒泡排序
>Bubble Sort 简单直观的排序算法。
>重复的走访要排序的数列，`一次比较两个元素`
>顺序错误就交换过来
>走访数列的工作是重复地进行直到没有再需要交换，也就是说该数列已经排序完成。
>这个算法的名字由来是因为越小的元素会经由交换慢慢“浮”到数列的顶端。

###### 步骤
- 比较相邻的两个值，可以根据 < > 来做升序降序

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
>插入排序的代码实现虽然没有冒泡排序和选择排序那么简单粗暴，
>但它的原理应该是最容易理解的了，因为只要打过扑克牌的人都应该能够秒懂。插入排序是一种最简单直观的排序算法，
>它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入。
>插入排序和冒泡排序一样，也有一种优化算法，叫做拆半插入。

###### 步骤
- 1.将第一待排序序列第一个元素看做一个有序序列，把第二个元素到最后一个元素当成是未排序序列。
- 2.从头到尾依次扫描未排序序列，将扫描到的每个元素插入有序序列的适当位置。
- （如果待插入的元素与有序序列中的某个元素相等，则将待插入元素插入到相等元素的后面。）

```php
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
```

```go
func insertSort(arr []int) []int {
	length := len(arr)
	for i := 1; i < length ; i++  {
		preIndex := i - 1
		current := arr[i]
		for preIndex >= 0 && arr[preIndex] > current {
			arr[preIndex+1] = arr[preIndex]
			preIndex--
		}
		arr[preIndex+1] = current
	}
	return arr
}
```


## 希尔排序

## 归并排序

## 快速排序

## 堆排序

## 计数排序

## 桶排序

## 基数排序
