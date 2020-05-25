# php函数

## php加密
- `md5()`
- `crypt()`
- `sha1()`

## 数组函数
```php
$arr = [['last'=>1,1],['last'=>2,3]];
$key = 'last';
array_column($arr,$key); //返回数组中单一列的值
array_unique(); //数组去重
array_slice($arr=[1],0,$length=1);//取出数组中的元素
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

## php7
```php
#标量类型声明
#declare(strict_types=1);
#int string array float interfaces callable
$isset = $isset ?? null;
$empty = 1;
$empty = $empty ?: null; 
$a = 1<=>2; //太空运算符 1,0,-1
define('array',[1,2,3]);
#增加了可以为 unserialize() 提供过滤的特性，可以防止非法数据进行代码注入，提供了更安全的反序列化数据。
class a {}
$a = serialize(new a());
$b = unserialize($a,['allowed_classes'=>["a"]]);
#IntlChar::BLOCK_CODE_AEGEAN_NUMBERS
#PHP 7 通过引入几个 CSPRNG 函数提供一种简单的机制来生成密码学上强壮的随机数
$bytes = random_bytes(6);
$int_rand = random_int(100,1000);
#异常 zend.assertions =1，0，-1 assert.exception=1,0
# PHP 7 之前版本需要使用多次 use
#use some\namespace\ClassA;
#use some\namespace\ClassC as C;
#use function some\namespace\fn_a;
#use function some\namespace\fn_b;
#use const some\namespace\ConstA;
#use const some\namespace\ConstB;
# PHP 7+ 之后版本可以使用一个 use 导入同一个 namespace 的类
#use some\namespace\{ClassA, ClassB, ClassC as C};
#use function some\namespace\{fn_a, fn_b, fn_c};
#use const some\namespace\{ConstA, ConstB, ConstC};
#错误处理
#Error 类并不是从 Exception 类 扩展出来的，所以用 catch (Exception $e) { ... } 
#这样的代码是捕获不 到 Error 的。你可以用 catch (Error $e) { ... } 这样的代码，
#或者通过注册异常处理函数（ set_exception_handler()）来捕获 Error。
echo intdiv(9,3);#第一个参数除以第二个参数并取整数
session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);
#废弃  类名和方法名相同/以静态的方式调用非静态方法
```

## php7 匿名类
```php
<?php
interface Logger {
   public function log(string $msg);
}

class Application {
   private $logger;

   public function getLogger(): Logger {
      return $this->logger;
   }

   public function setLogger(Logger $logger) {
      $this->logger = $logger;
   }  
}

$app = new Application;
// 使用 new class 创建匿名类
$app->setLogger(new class implements Logger {
   public function log(string $msg) {
      print($msg);
   }
});

$app->getLogger()->log("我的第一条日志");
$function = function() {
    return $this->logger.'闭包函数';
};
//closure::call 闭包函数绑定到类上
$function->bindTo(new Application,'getLogg');
$function->call(new Application);
```

