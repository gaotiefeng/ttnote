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

## TestClass
```php
class TestClass
{
    //一个类被当成字符串时应怎样回应
    public function __toString(): string
    {
        return "model is toString";
    }

    //函数的方式调用一个对象
    public function __invoke($data)
    {
        var_dump($data);
    }

    public $var1;
    public $var2;

    //var_export 导出类时，此静态方法调用
    static function __set_state(array $properties)
    {
        $obj = new TestClass();
        $obj->var1 = $properties['var1'];
        $obj->var2 = $properties['var2'];

        return $obj;
    }

    private $name = '12';
    //不可访问属性赋值时调用
    public function __set($name,$value)
    {
        echo "不可访问属性";
        echo PHP_EOL;
    }

    //读取不可访问属性的值
    public function __get($name)
    {
        echo "读取不可访问属性的值";
        echo PHP_EOL;
    }

    //对不可访问属性调用 isset() 或 empty() 时
    public function __isset($name)
    {
        echo "不可访问属性，你使用isset了";
        echo PHP_EOL;
    }

    //对不可访问属性调用 unset() 时
    public function __unset($name)
    {
        echo "对不可访问属性调用 unset() 时";
        echo PHP_EOL;
    }

    //对象中调用一个不可访问方法时
    public function __call($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }

    //静态上下文中调用一个不可访问方法时
    public static function __callStatic($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }

    //对象复制
    public function __clone()
    {
        $this->var2 = '122121';
    }
}
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