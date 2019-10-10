
### 32位操作基本数据类型

类型名称 | 占字节数 | 	其他叫法 | 表示范围
----|------|----|----
char | 1  | signed char | -128 ~ 127
unsigned char | 1  | none | 0 ~ 255
int | 4  | signed int | -2,147,483,648 ~ 2,147,483,647
unsigned int | 4  | unsigned int | 0 ~ 4,294,967,295
short | 2  | short int | -32,768 ~ 32,767
unsigned short | 2  | unsigned short int | 0 ~ 65,535
long | 4  | long int | -2,147,483,648 ~ 2,147,483,647
unsigned long | 4  | unsigned long | 	0 ~ 4,294,967,295
float | 4  | mone | 3.4E +/- 38 (7 digits)
double | 8  | mone | 1.7E +/- 308 (15 digits)
long double	 | 10  | mone | 1.2E +/- 4932 (19 digits)


#####自己定义的变量函数名等要注意不可以与关键字同名
## C语言中的32个关键字
- | | | -
----|------|----|----
auto | double  | int | struct
break | else  | long | switch
case | enum  | register | typedef
char | extern  | return | union
const | float  | short | unsigned
continue | for  | signed | void
default | goto  | sizeof | volatile
do | if  | static | while

## sizeof 类型变量的长度

#######putchar函数是字符输出函数，其功能是在终端（显示器）输出单个字符
#######getchar函数的功能是接收用户从键盘上输入的一个字符 getchar()
#######printf函数叫做格式输出函数，其功能是按照用户指定的格式
### printf(“格式控制字符串”,输出表项); 

格式字符 |
----|----
d , i | 以十进制形式输出有符号整数(正数不输出符号)
O | 以八进制形式输出无符号整数(不输出前缀0)
x | 以十六进制形式输出无符号整数(不输出前缀0x)
U | 以十进制形式输出无符号整数
f | 以小数形式输出单、双精度类型实数
e | 以指数形式输出单、双精度实数
g | 以%f或%e中较短输出宽度的一种格式输出单、双精度实数
C | 输出单个字符
S | 输出字符串

#######scanf函数称为格式输入函数，即按照格式字符串的格式，从键盘上把数据输入到指定的变量之中
#######scanf(“格式控制字符串”，输入项地址列表); 

转换说明符 |
----|----
%c | 把输入解释成一个字符
%d | 把输入解释成一个有符号十进制整数
%e,%f,%g,%a | 把输入解释成一个浮点数(%a是C99的标准)
%E,%F,%G,%A | 把输入解释成一个浮点数(%A是C99的标准)
%i | 把输入解释成一个有符号十进制整数
%o | 把输入解释成一个有符号的八进制整数
%p | 把输入解释成一个指针(一个地址)
%s | 把输入解释成一个字符串：输入的内容以第一个非空白字符作为开始，并且包含直到下一个空白字符的全部字符
%u | 把输入解释成一个无符号十进制整数
%x,%X | 把输入解释称一个有符号十六进制整数