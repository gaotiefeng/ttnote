# 加密

>加密的本质就是扰乱数据，某些不可恢复的数据扰乱我们称为单向加密或者散列算法。另外还有一种双向加密方式，也就是可以对加密后的数据进行解密。

## MD5 
- 单向加密

```php
$str = '123456';
md5($str);
```

```go
page main
import( "io","fmt","crypto/md5")
m := md5.New()
io.WriteString(s,"my password is 123456")
fmt.Sprintf("%x \n",m.Sum(nil))
```

## crype(str,salt)
- 加盐

```php
$password = '123456';
$salt = 'password';
echo crype($password,$salt);
```

## SHA-1

```php
$pass = '123456';
echo sha1($pass);
```

## SHA-256

## BASE64

## URLENCODE

```php
$url = 'go.tfuu.cn';
urlencode($url);
urldecode($url);
```