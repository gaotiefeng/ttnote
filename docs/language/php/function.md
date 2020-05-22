# php函数

## php加密
- `md5()`
- `crypt()`
- `sha1()`

## 数组函数
```php
array_unique(); //数组去重
array_slice($arr=[1],0,$length=1);
join($glue=",",$arr);//数组分割为字符串
implode($glue=",",$arr);//数组分割为字符串
```

- `array_unshift`
- `array_pop`
- `array_push`
- `array_shift`   将数组`开头`的单元移出数组并作为结果返回
- `array_values() `函数返回包含数组中所有的值的数组。被返回的数组将使用数值键，从 0 开始且以 1 递增
- `uasort` — uasort ( array &$array , callable $value_compare_func ) : bool  


## 对象函数
- `spl_object_hash ( object $obj ) : string ` — 返回指定对象的hash id
