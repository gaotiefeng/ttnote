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

## 结构体
```go
type Books struct {
    title string
    author string
    subject string
    book_id int
}
```

## Go语言数组

```go
var array := []int {}
```

- 使用指针在函数间传递大数组




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
## 文件上传
- 表单中增加enctype="multipart/form-data"
  服务端调用r.ParseMultipartForm,把上传的文件存储在内存和临时文件中
  使用r.FormFile获取文件句柄，然后对文件进行存储等处理。
```go
// 处理/upload 逻辑
func upload(w http.ResponseWriter, r *http.Request) {
	fmt.Println("method:", r.Method) //获取请求的方法
	if r.Method == "GET" {
		crutime := time.Now().Unix()
		h := md5.New()
		io.WriteString(h, strconv.FormatInt(crutime, 10))
		token := fmt.Sprintf("%x", h.Sum(nil))

		t, _ := template.ParseFiles("upload.gtpl")
		t.Execute(w, token)
	} else {
		r.ParseMultipartForm(32 << 20)
		file, handler, err := r.FormFile("uploadfile")
		if err != nil {
			fmt.Println(err)
			return
		}
		defer file.Close()
		fmt.Fprintf(w, "%v", handler.Header)
		f, err := os.OpenFile("./test/"+handler.Filename, os.O_WRONLY|os.O_CREATE, 0666)  // 此处假设当前目录下已存在test目录
		if err != nil {
			fmt.Println(err)
			return
		}
		defer f.Close()
		io.Copy(f, file)
	}
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
 定义一个channel时，也需要定义发送到channel的值的类型。注意，必须使用make 创建channel
 value 为缓冲区大小，下列例子中 前6个为无阻赛，当第7个开始时为阻塞，channel取出之后，不阻塞
 
```go
function get(c chan int){
        var y = 1
        c < -y
}
var value = 6
ch := make(chan int,value)
go get(c)
```
 当 value = 0 时，channel 是无缓冲阻塞读写的，当value > 0 时，channel 有缓冲、是非阻塞的，直到写满 value 个元素才阻塞写入。

- Range和close
```go
function get(c chan int, n int) {
       for i := 0, i < n , i++ {
            c <- i
        }
       close(c)
}

function main() {
    var c := chan(int)
    go get(c,cap(n))
    for i := range c {
        fmt.Println(i)
    }

```

- for i := range c能够不断的读取channel里面的数据，直到该channel被显式的关闭。
  上面代码我们看到可以显式的关闭channel，生产者通过内置函数close关闭channel。
  关闭channel之后就无法再发送任何数据了，
  在消费方可以通过语法v, ok := <-ch测试channel是否被关闭。
  如果ok返回false，那么说明channel已经没有任何数据并且已经被关闭。

- select 
  那么如果存在多个channel的时候，我们该如何操作呢，Go里面提供了一个关键字select，通过select可以监听channel上的数据流动。
  select默认是阻塞的，只有当监听的channel中有发送或接收可以进行时才会运行，当多个channel都准备好的时候，select是随机的选择一个执行的。

- 超时
  有时候会出现goroutine阻塞的情况，那么我们如何避免整个程序进入阻塞的情况呢？我们可以利用select来设置超时，通过如下的方式实现：

```go
func main() {
	c := make(chan int)
	o := make(chan bool)
	go func() {
		for {
			select {
				case v := <- c:
					println(v)
				case <- time.After(5 * time.Second):
					println("timeout")
					o <- true
					break
			}
		}
	}()
	<- o
}
```  