###安装go
```
wget https://dl.google.com/go/go1.12.7.linux-amd64.tar.gz

tar -C /usr/local -xzf go1.12.7.linux-amd64.tar.gz

export PATH=$PATH:/usr/local/go/bin
```
- GO语言结构
#####包声明 -package main
#####引入包 import "fmt"
#####函数     func main() {}
#####变量     var str sting = "abc"  // str := "abc"
#####语句 & 表达式
#####注释 单行注释// 多行注释/* */
#####常量中的数据类型只可以是布尔型、数字型（整数型、浮点型和复数）和字符串型。

- GO语言运算符
    - 算术运算符
    ```
    +  -  *  /  %  ++  --
    ```
    - 关系运算符
    ```
    ==	!= > < <= >= 
    ```
    - 逻辑运算符 true/false
    ```
    &&	||  !  
    ```
    - 位运算符
    
    ```
    &   |   ^  <<  >>
    ```
    
    - 赋值运算符
    
    ```
    =   +=  -= *= /= %= <<= >>= &= ^=  |=
    ```
    - 其他运算符
    ```
        &   *
    ```
- GO语言条件语句
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
- Go循环语句
   ```
    for ture {
        break
        continue
        goto
    }
```
    