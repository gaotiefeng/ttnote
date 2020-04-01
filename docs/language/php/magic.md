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