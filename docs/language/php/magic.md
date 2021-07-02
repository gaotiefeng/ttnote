## 魔术常量

```php
__LINE__; //当前行
__FILE__; //文件的完整路径和文件名
__DIR__; // 文件所在目录
__FUNCTION__; //函数名称
__CLASS__; //类的名称
__TRAIT__; //trait的名字
__METHOD__; //类的方法名
__NAMESPACE__; //当前命名空间
```

## 魔术方法

```php

##构造方法 当类被创建时候调用此方法
function __construct() {}

##析构方法，PHP将在对象被销毁前（即从内存中清除前）调用这个方法
function __destruct() {}

##当尝试以调用函数的方式调用一个对象时
function __invoke(){}

##当调用一个未定义(包括没有权限访问)的方法是调用此方法
function __call($method, $arg_array) {
    echo $method.'未定义';
}

##和 __call一样，只是处理静态方法
function __callStatic() {}

##复制当前对象  clone class();
function __clone() {}

function __get() {}
function __set() {}
function __isset() {}
function __unset() {}

##将一个对象转化成字符串时自动调用
function __toString() {}

##
function __sleep() {}

##反序列化的时候调用
function __wakeup() {}

## static function _set_state()，调用var_export()导出类时，此静态方法会被调用。
function __set_state(array $data) {}
##(未来将被废弃->抛出的异常不能被catch)__autoload自动加载类和接口，但更建议使用 spl_autoload_register() 函数
function __autoload() {}

```


>trait 使用

```php
trait Word{
    public function word() {
        return 'word';
    }
}

class Hello { 
use Word;
}

$hello = new Hello();
$hello->word();

```