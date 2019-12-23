## 安装go
```linux
route add default gw 10.0.0.1 

wget https://dl.google.com/go/go1.12.7.linux-amd64.tar.gz

tar -C /usr/local -xzf go1.12.7.linux-amd64.tar.gz

export PATH=$PATH:/usr/local/go/bin

##https://mirrors.aliyun.com/goproxy/
export GOPROXY=https://goproxy.io
export GO111MODULE=on

```
- GO语言结构
##### 包声明 -package main
##### 引入包 import "fmt"
##### 函数     func main() {}
##### 变量     var str sting = "abc"  // str := "abc"
##### 语句 & 表达式
##### 注释 单行注释// 多行注释/* */
##### 常量中的数据类型只可以是布尔型、数字型（整数型、浮点型和复数）和字符串型。

## GO语言运算符

```
算术运算符

+  -  *  /  %  ++  --

- 关系运算符

==	!= > < <= >= 

逻辑运算符 true/false

&&	||  !  

- 位运算符

&   |   ^  <<  >>

赋值运算符

=   +=  -= *= /= %= <<= >>= &= ^=  |=
   
其他运算符
    &   *
```

## GO语言条件语句

```go
var a int  = 30
if a > 20 {
    printnl(a);
}
if ...else 
if 嵌套 if
switch var {
        case 1:
            ....
        case 2:
            ....
}
select {
    case communication clause  :
       statement(s);      
    case communication clause  :
       statement(s); 
    /* 你可以定义任意数量的 case */
    default : /* 可选 */
       statement(s);
}
```
       
<div style="color: #F136FF">Go循环语句</div>

```go
for ture {
    break
    continue
    goto
}
```

<div style="color:#F136FF">变量</div>
<div style="color:#F136FF">全局变量（函数外变量）</div>
<div style="color:#F136FF">局部变量（函数内变量）</div>
<div style="color:#F136FF">形式参数（函数定义中的变量）形式参数会作为函数的局部变量来使用</div>

```go
var str string;

func Str(a,b) {
    a := 10
}
```

## 常量

```go
const identifier [type] = value
```

> 显示类型定义 隐式类型定义

```go
显式类型定义： const b string = "abc"
隐式类型定义： const b = "abc"
```

- iota，特殊常量

<div style="color:#3C562E;background: #FF93EB">iota，特殊常量，可以认为是一个可以被编译器修改的常量。
      在每一个const关键字出现时，被重置为0，然后再下一个const出现之前，每出现一次iota，其所代表的数字会自动增加1。
      iota 可以被用作枚举值：
</div>


## Go语言数组
array 使用type  struct  长度不可变
```go
type Books struct {
    title string
    author string
    subject string
    book_id int
}
```

## slice 切片
slice  切片[] 空切片nil   数组的抽象长度可变 append追加
```go
make([]type, len)
```

***new 只分配内存，而 make 只能用于 slice、map 和 channel 的初始化***

## map 集合
map 集合  无序的key->value 集合
```go
map_val = := make(map[string]int)
```

range go语言范围   数组返回元素对应的索引和索引值   集合返回key-value 中的key
```go
for i, num := range nums {
        if num == 3 {
            fmt.Println("index:", i)
        }
    }
```

- GO语言 递归，就是在运行的过程中调用自己。
根据条件退出


- GO语言 类型转换用于将一种数据类型的变量转换为另外一种类型的变量

```go
type_name(expression)
   var sum int = 17
   var count int = 5
   var mean = int(sum/count)

   mean = float32(sum)/float32(count)
   fmt.Printf("mean 的值为: %f\n",mean)
```
type_name 为类型，expression 为表达式。

-Go 语言接口

```go
type jiekou interface{
}
```

-GO 错误处理error类型是一个接口类型

```go
type error interface {
    Error() string
}
```
## GO并发

Go语言支持并发，我们只需要通过 go 关键字来开启 goroutine 即可。
`goroutine 是轻量级线程，goroutine 的调度是由 Golang 运行时进行管理的。`

```go
go func(x,z)
```

-通道（channel）
 通道（channel）是用来传递数据的一个数据结构。单向、双向通道（缓冲区）close()
 
```go
ch := make(chan int)
```

    