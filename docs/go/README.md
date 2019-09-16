## 安装go
```
route add default gw 10.0.0.1 

wget https://dl.google.com/go/go1.12.7.linux-amd64.tar.gz

tar -C /usr/local -xzf go1.12.7.linux-amd64.tar.gz

export PATH=$PATH:/usr/local/go/bin

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
       ```
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
Go循环语句
   ```
    for ture {
        break
        continue
        goto
    }
    ```

## Go语言数组
array 使用type  struct  长度不可变
```
type Books struct {
    title string
    author string
    subject string
    book_id int
}
```
slice  切片[] 空切片nil   数组的抽象长度可变 append追加
```
make([]type, len)
```
map 集合  无序的key->value 集合
```
map_val = := make(map[string]int)
```
range go语言范围   数组返回元素对应的索引和索引值   集合返回key-value 中的key
```
for i, num := range nums {
        if num == 3 {
            fmt.Println("index:", i)
        }
    }
```
- GO语言 递归，就是在运行的过程中调用自己。
- GO语言 类型转换用于将一种数据类型的变量转换为另外一种类型的变量
```
type_name(expression)
   var sum int = 17
   var count int = 5
   var mean = int(sum/count)
```
type_name 为类型，expression 为表达式。

-Go 语言接口
```
type jiekou interface{
}
```
-GO 错误处理error类型是一个接口类型
```
type error interface {
    Error() string
}
```
## GO并发

Go语言支持并发，我们只需要通过 go 关键字来开启 goroutine 即可。
goroutine 是轻量级线程，goroutine 的调度是由 Golang 运行时进行管理的。
```
go func(x,z)
```
-通道（channel）
 通道（channel）是用来传递数据的一个数据结构。单向、双向通道（缓冲区）close()
 ```
ch := make(chan int)
```

    