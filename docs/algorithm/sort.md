# 排序算法
[算法](https://sort.hust.cc)

###### 时间复杂度
- 1.平方阶(O(n2))排序
- 2.线性对数阶(O(nlog2n))排序
- 3.O(n1+§)) 排序，§ 是介于 0 和 1 之间的常数。希尔排序
- 4.线性阶(O(n))排序
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
function bubbleSort(array $arr)
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
function selectSort(array $arr)
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
 function insertSort(array $arr)
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

## 快速排序
`快速排序是由东尼·霍尔所发展的一种排序算法。在平均状况下，排序 n 个项目要 Ο(nlogn) 次比较。
在最坏状况下则需要 Ο(n2) 次比较，但这种状况并不常见。
事实上，快速排序通常明显比其他 Ο(nlogn) 算法更快，
因为它的内部循环（inner loop）可以在大部分的架构上很有效率地被实现出来。`

###### 基本思想
>通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，
>然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列。

>快速排序的最坏运行情况是 O(n²)，比如说顺序数列的快排。但它的平摊期望时间是 O(nlogn)，
>且 O(nlogn) 记号中隐含的常数因子很小，比复杂度稳定等于 O(nlogn) 的归并排序要小很多。
>所以，对绝大多数顺序性较弱的随机数列而言，快速排序总是优于归并排序。
###### 算法步骤

- 1.从数列中挑出一个元素，称为 “基准”（pivot）;
- 2.重新排序数列，所有元素比基准值小的摆放在基准前面，所有元素比基准值大的摆在基准的后面（相同的数可以到任一边）。
- 在这个分区退出之后，该基准就处于数列的中间位置。这个称为分区（partition）操作；
- 3.递归地（recursive）把小于基准值元素的子数列和大于基准值元素的子数列排序；
- 递归的最底部情形，是数列的大小是零或一，也就是永远都已经被排序好了。虽然一直递归下去，
- 但是这个算法总会退出，因为在每次的迭代（iteration）中，它至少会把一个元素摆到它最后的位置去。

```php
class Sort {
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
```




## 希尔排序

## 归并排序

## 堆排序

## 计数排序

## 桶排序

## 基数排序
