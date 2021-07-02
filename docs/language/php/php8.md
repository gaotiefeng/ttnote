## [php8](https://www.php.net/releases/8.0/en.php)

### constructor升级
```shell
#php7
class Point {
  public float $x;
  public float $y;
  public float $z;

  public function __construct(
    float $x = 0.0,
    float $y = 0.0,
    float $z = 0.0
  ) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}
#php8
class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}
}
```

### 联合类型
```shell
  public function __construct(
    private int|float $number
  ) {}
}
new Number('NaN'); // TypeError
```

### match匹配表达示
```shell
echo match (8.0) {
  '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};
//> This is what I expected
```

### 空安全运算符`?->`
```shell
$country = $session?->user?->getAddress()?->country;
```

### 函数内置 = 类型错误
```shell
strlen([]); // TypeError: strlen(): Argument #1 ($str) must be of type string, array given
```

### JIT引擎
-- 配置