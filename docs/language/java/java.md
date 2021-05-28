## 安装java

```
######centos
yum search java|grep jdk

yum install java-1.8.0-openjdk

#安装目录
cd /usr/lib/jvm

#环境变量
vim /etc/porfile
JAVA_HOME=/usr/lib/jvm/java-1.8.0-openjdk-1.8.0.161-0.b14.el7_4.x86_64
JRE_HOME=$JAVA_HOME/jre
CLASS_PATH=.:$JAVA_HOME/lib/dt.jar:$JAVA_HOME/lib/tools.jar:$JRE_HOME/lib
PATH=$PATH:$JAVA_HOME/bin:$JRE_HOME/bin
export JAVA_HOME JRE_HOME CLASS_PATH PATH

#source /etc/porfile

java -version
```

## windows安装环境
```
http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html
下载1.8
环境变量配置
单击下方【系统变量】下的【新建】按钮；
然后输入JAVA_HOME,对应的变量值为你jdk安装的目录。
然后新建变量名：classpath 变量值%JAVA_HOME%\lib;%JAVA_HOME%\lib\tools.jar点确定
“Path”的变量并双击，新建变量为 %JAVA_HOME%\bin
```

## java体系
- 1、javaSE，标准版，各应用平台的基础，桌面开发和低端商务应用的解决方案。
- 2、javaEE，企业版，以企业为环境而开发应用程序的解决方案。
- 3、javaME，微型版，致力于消费产品和嵌入式设备的最佳方案。

## init
>字符串型的数组 变量 args

```java
public static void main(String[] args) {
        
    }
```
## oop
## 构造方法 
- 构造方法的名称必须与类同名，一个类可以有多个构造方法。

## 方法重载
>在一个类中，我们可以定义多个方法。如果有一系列方法，它们的功能都是类似的，只有参数有所不同，那么，可以把这一组方法名做成同名方法

## 继承extends
>超类（super class），父类（parent class），基类（base class）
>引用父类

```java
class Person {
    protected String name;
}
class Student extends Person {
    super.name  this.name  name  //调用都是一样的
} 
```
- 问题 子类不会继承任何父类的构造方法。子类默认的构造方法是编译器自动生成的，不是继承的。
>向上转型（upcasting）。 Person p = new Student() 向上转型实际上是把一个子类型安全地变为更加抽象的父类型：
>继承树是Student > Person > Object，所以，可以把Student类型转型为Person，或者更高层次的Object
>向下转型（downcasting）如果把一个父类类型强制转型为子类类型，就是向下转型（downcasting）。
>Java提供了instanceof操作符，
>继承是is关系，组合是has关系。

```
class Book {
    protected String name;
    public String getName() {...}
    public void setName(String name) {...}
}
class Student extends Person {
    protected Book book;
}
```

- 在继承关系中，子类如果定义了一个与父类方法签名完全相同的方法，被称为覆写（Override）。
<div style="color: lightsalmon">覆写Object方法
因为所有的class最终都继承自Object，而Object定义了几个重要的方法：</div>
- toString()：把instance输出为String；
- equals()：判断两个instance是否逻辑相等；
- hashCode()：计算一个instance的哈希值。

final修饰的方法不能被Override
```
public final String hello() {
        return "Hello, " + name;
    }
```
>final修饰的方法可以阻止被覆写；
>final修饰的class可以阻止被继承；
>final修饰的field必须在创建对象时初始化，随后不可修改。

## 抽象类（abstract class）
- 这种尽量引用高层类型，避免引用实际子类型的方式，称之为面向抽象编程。
- 面向抽象编程的本质就是：
- 上层代码只定义规范（例如：abstract class Person）；
- 不需要子类就可以实现业务逻辑（正常编译）；
- 具体的业务逻辑由不同的子类实现，调用者并不关心。

## 接口
```
interface Person {
    void run();
    String getName();
}
```
- 所谓interface，就是比抽象类还要抽象的纯抽象接口，因为它连字段都不能有。因为接口定义的所有方法默认都是public abstract的，所以这两个修饰符不需要写出来（写不写效果都一样）。
- 一个interface可以继承自另一个interface。interface继承自interface使用extends
- 在接口中，可以定义default方法

- 静态字段：static 
>静态方法：static 静态方法经常用于工具类

## 包
- java定义了一种名字空间，称之为包：package。一个类总是属于某个包，类名（比如Person）只是一个简写，真正的完整类名是包名.类名
- 使用package来解决名字冲突。
#####import 导入包

```
package hello

class Parson {

     void hello()
     {
     }
}
```

## 作用域
- Java修饰符
- 像其他语言一样，Java可以使用修饰符来修饰类中方法和属性。主要有两类修饰符：
- 访问控制修饰符 : default, public , protected, private
- 非访问控制修饰符 : final, abstract, static, synchronized
- Java 变量
- Java 中主要有如下几种类型的变量
- 局部变量
- 类变量（静态变量）
- 成员变量（非静态变量）

#### classpath和jar
- classpath是JVM用到的一个环境变量，它用来指示JVM如何搜索class。
- 在系统环境变量中设置classpath环境变量，不推荐；
- 在启动JVM时设置classpath变量，推荐
######jar
- 如果有很多.class文件，散落在各层目录中，肯定不便于管理。如果能把目录打一个包，变成一个文件，就方便多了。
- 那么问题来了：如何创建jar包？
- 因为jar包就是zip包，所以，直接在资源管理器中，找到正确的目录，点击右键，在弹出的快捷菜单中选择“发送到”，“压缩(zipped)文件夹”，就制作了一个zip文件。然后，把后缀从.zip改为.jar，一个jar包就创建成功。

## 模块

#### 字符串类型
>和char类型不同，字符串类型String是引用类型，我们用双引号"..."表示字符串。一个字符串可以存储0个到任意个字符：
#### 字符串和编码
>在Java中，String是一个引用类型，它本身也是一个class。但是，Java编译器对String有特殊处理，即可以直接用"..."来表示一个字符串：

```
String a = "HELLO";
实际上字符串在String内部是通过一个char[]数组表示的，因此，按下面的写法也是可以的：

String s2 = new String(new char[] {'H', 'e', 'l', 'l', 'o', '!'});
```

>字符串比较 equals
- 要忽略大小写比较，使用equalsIgnoreCase()方法。

```
        String a = "1";
        String b = "1";
        System.out.println(a.equals(b));
```

#### 空值
- 空值null和空字符串""，空字符串是一个有效的字符串对象，它不等于null。

#### 数组 数组是引用类型
>定义一个数组类型的变量，使用数组类型“类型[]”，例如，int[]。和单个基本类型变量不同，数组变量初始化必须使用new int[5]表示创建一个可容纳5个int元素的数组。
Java的数组有几个特点：
数组所有元素初始化为默认值，整型都是0，浮点型是0.0，布尔型是false；
数组一旦创建后，大小就不可改变。
要访问数组中的某一个元素，需要使用索引。数组索引从0开始，例如，5个元素的数组，索引范围是0~4。
可以修改数组中的某一个元素，使用赋值语句，例如，ns[1] = 79;。
可以用数组变量.length获取数组大小：
>

```
int[] ns = new int[5];
ns[0] = 1;
ns[1] = 1;
ns[2] = 1;
ns[3] = 1;
ns[4] = 1;
```

######字符串数组

## 运算符
- 算数运算符
|  操作符   | 描述  |
|  ----  | ----  |
| +  | 加法 |
| —  | 减法 |
| *  | 乘法 |
| /  | 除法 |
| %  | 取余 |
| ++  | 自增1 |
| --  | 自减 |

>1、前缀自增自减法(++a,--a): 先进行自增或者自减运算，再进行表达式运算。
 2、后缀自增自减法(a++,a--): 先进行表达式运算，再进行自增或者自减运算 实例：

- 关系运算符
|  运算符符   | 描述  |
|  ----  | ----  |
| ==  | 是否相等 |
| !=  | 不相等则为真 |
| >  | 是否大于 |
| <  | 是否小于 |
| >=  | 是否大于等于 |
| <=  | 是否小于等于 |

- 位算符
|  操作符   | 描述  |
|  ----  | ----  |
| &  | 如果相对应位都是1，则结果为1，否则为0 |
| |  | 如果相对应位都是 0，则结果为 0，否则为 1 |
| ^ | 如果相对应位值相同，则结果为0，否则为1 |
| 〜  | 按位取反运算符翻转操作数的每一位，即0变成1，1变成0。 |
| <<  | 按位左移运算符。左操作数按位左移右操作数指定的位数。 |
| >>  | 按位右移运算符。左操作数按位右移右操作数指定的位数。 |
| >>>  | 按位右移补零操作符。左操作数的值按右操作数指定的位数右移，移动得到的空位以零填充。 |
-Java定义了位运算符，应用于整数类型(int)，长整型(long)，短整型(short)，字符型(char)，和字节型(byte)等类型。
 位运算符作用在所有的位上，并且按位运算。假设a = 60，b = 13;它们的二进制格式表示将如下：
 ```
 A = 0011 1100
 B = 0000 1101
 -----------------
 A&B = 0000 1100
 A | B = 0011 1101
 A ^ B = 0011 0001
 ~A= 1100 0011
 ```
- 逻辑运算符
|  操作符   | 描述  |
|  ----  | ----  |
| &&  | 两个操作数为真，条件才为真|
| ||  | 两个操作数，任一为真则为真 |
| ! | 称为逻辑非运算符。用来反转操作数的逻辑状态。如果条件为true，则逻辑非运算符将得到false。 |

- 赋值运算符
|  操作符   | 描述  |
|  ----  | ----  |
| =  | 右操作数的值赋给左侧操作数 |
| +=  | 把左右的操作数的值相加，给左侧的操作数 |
| -=  | 把左右的操作数的值相减，给左侧的操作数 |
| *=  | 把左右的操作数的值相乘，给左侧的操作数 |
| /=  | 把左右的操作数的值相除，给左侧的操作数 |
| (%)=| 取模和赋值操作符，它把左操作数和右操作数取模后赋值给左操作数 |
| <<= | 	左移位赋值运算符 |
| >>= |     右移位赋值运算符 |
| ＆= | 按位与赋值运算符 |
| ^=| 按位异或赋值操作符 |
| |=| 按位或赋值操作符 |

- 三元运算符
- ?:
```
public static void main(String[] args) {
    a = 1;
    b = (a == 2)? a : 1;
}
```

- <kbd>instanceof</kbd>运算符
- 该运算符用于操作对象实例，检查该对象是否是一个特定类型（类类型或接口类型）。
## 输入输出

- 输出
>System.out.println()
>println是print line的缩写，表示输出并换行。因此，如果输出后不想换行，可以用print()：

>格式化输出使用System.out.printf()，通过使用占位符%?

```
public class Main {
    public static void main(String[] args) {
        double d = 3.1415926;
        System.out.printf("%.2f\n", d); // 显示两位小数3.14
        System.out.printf("%.4f\n", d); // 显示4位小数3.1416
    }
}
```

占位符 | 说明 |
----  |  ----
%d	| 格式化输出整数
%x	| 格式化输出十六进制整数
%f	| 格式化输出浮点数
%e	| 格式化输出科学计数法表示的浮点数
%s	| 格式化字符串

- 输入
***和输出相比，Java的输入就要复杂得多。***

```
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in); // 创建Scanner对象
        System.out.print("Input your name: "); // 打印提示
        String name = scanner.nextLine(); // 读取一行输入并获取字符串
        System.out.print("Input your age: "); // 打印提示
        int age = scanner.nextInt(); // 读取一行输入并获取整数
        System.out.printf("Hi, %s, you are %d\n", name, age); // 格式化输出
    }
}
```

## 流程控制
######  if
>当if语句块只有一行语句时，可以省略花括号{}：
if语句还可以编写一个else { ... }，当条件判断为false时，将执行else的语 

```
if (条件) {
    // 条件满足时执行
}

public class Main {
    public static void main(String[] args) {
        int n = 70;
        if (n >= 60) {
            System.out.println("及格了");
        } else {
            System.out.println("挂科了");
        }
        System.out.println("END");
    }
}

public class Main {
    public static void main(String[] args) {
        int n = 70;
        if (n >= 90) {
            System.out.println("优秀");
        } else if (n >= 60) {
            System.out.println("及格了");
        } else {
            System.out.println("挂科了");
        }
        System.out.println("END");
    }
}
```

###### 判断值类型的变量是否相等，可以使用==
###### 两个String类型，它们的内容是相同的，但是，分别指向不同的对象，用==判断，结果为false
***要判断引用类型的变量内容是否相等，必须使用equals()方法***

```
 str != null
要避免NullPointerException错误，可以利用短路运算符&&
if (str != null && str.equals(str1))
```

- switch  ***case具有穿透力 要写break***

```
public class Main {
    public static void main(String[] args) {
        int option = 1;
        switch (option) {
        case 1:
            System.out.println("Selected 1");
            break;
        case 2:
            System.out.println("Selected 2");
            break;
        case 3:
            System.out.println("Selected 3");
            break;
        }
    }
}
```

- while 

```
while (条件表达式) {
       循环语句
   }
```

- do while

```
do {
    执行循环语句
} while (条件表达式);

public class Main {
    public static void main(String[] args) {
        int sum = 0;
        int n = 1;
        do {
            sum = sum + n;
            n ++;
        } while (n <= 100);
        System.out.println(sum);
    }
}
```

- for 

```
public class Main {
    public static void main(String[] args) {
        int sum = 0;
        for (int i=1; i<=100; i++) {
            sum = sum + i;
        }
        System.out.println(sum);
    }
}

```
***break会跳出当前循环，也就是整个循环都不会执行了。而continue则是提前结束本次循环，直接继续执行下次循环。***

#### 数组遍历

```
public status void main(String[] arr)
{
    int n = {1,2,3}
    for (int i=0; i< n.length - 1; i++) {
        int a = n[i];
        System.out.println(a);
    }
    
    for (int k : n) {
        // TODO k=数组的值
        System.out.println(k);
    }
}
```

#### 数组排序

- 冒泡排序
>冒泡排序的特点是，每一轮循环后，最大的一个数被交换到末尾，因此，下一轮循环就可以“刨除”最后的数，每一轮循环都比上一轮循环的结束位置靠前一位。
***每一次把做大的数，放在数组尾部***

```
@RequestMapping(value = ("/array/sort"), method = RequestMethod.GET)
    public String  sortM()
    {
        int[] ns = { 28, 12, 89, 73, 65, 18, 96, 50, 8, 36 };
        // 排序前:
        System.out.println(Arrays.toString(ns));
        System.out.println(ns.length);
        for (int i = 0; i < ns.length - 1; i++) {
            for (int j = 0; j < ns.length - i - 1; j++) {
                //可以根据 < > 来做升序降序
                if (ns[j] > ns[j+1]) {
                    // 交换ns[j]和ns[j+1]:
                    int tmp = ns[j];
                    ns[j] = ns[j+1];
                    ns[j+1] = tmp;
                    System.out.println(Arrays.toString(ns));
                }
            }
        }
        // 排序后:
        System.out.println(Arrays.toString(ns));
        return  Arrays.toString(ns);
    }
```

###### Arrays.sort(ns);后，这个整型数组在内存中变为：

#### 二维数组

```
public class Main {
    public static void main(String[] args) {
        int[][] ns = {
            { 1, 2, 3, 4 },
            { 5, 6, 7, 8 },
            { 9, 10, 11, 12 }
        };
        System.out.println(ns.length); // 3
    }
}
```

## java核心类
<p style="color: lightsalmon">String类</p>
<p style="color: lightsalmon">StringBuilder中新增字符时，不会创建新的临时对象</p>
<p style="color: lightsalmon">StringJoiner 类似用分隔符拼接数组的需求很常见</p>
<p style="color: lightsalmon">JavaBean主要用来传递数据</p>
<p style="color: lightsalmon">使用enum来定义枚举类</p>
<p style="color: lightsalmon">BigInteger由CPU原生提供的整型最大范围是64位long型整数。使用long型整数可以直接通过CPU指令进行计算，速度非常快。</p>
<p style="color: lightsalmon">BigDecimal可以表示一个任意大小且精度完全准确的浮点数</p>
<p style="color: lightsalmon">Math类就是用来进行数学计算的；Random用来创建伪随机数；SecureRandom就是用来创建安全的随机数的</p>

***字符串和编码***

- 判断字符串是否为空和判断空白字符串
>"".isEmpty(); // true，因为字符串长度为0
 "  ".isEmpty(); // false，因为字符串长度不为0
 "  \n".isBlank(); // true，因为只包含空白字符
 " Hello ".isBlank(); // false，因为包含非空白字符

- 替换字符串 .replace
- 拼接字符串 join()

> 类型转换

```
int
Integer.parseInt("123")
bool
Boolean.parseBoolean("true");
Integer.getInteger("java.version"); // 版本号，getInteger(String)方法，它不是将字符串转换为int，而是把该字符串对应的系统变量转换为Integer：
String和char[]类型可以互相转换
char[] c = "hello".toCharArray()
String s = new String(c) //如果修改了char[]数组，String并不会改变： new String 是复制 char[] 数组
```

- 字符编码
    ASCII GB2312 Unicode UTF-8 GBK
    
- 早期JDK版本的String总是以char[]存储   较新的JDK版本的String则以byte[]存储

关键字 | 说明 |
----  |  ----
equals()	| 字符串比较
contains()	| 是否包含字符串
trim()	| 去除首位空白符
strip()	| 类似中文的空格字符\u3000也会被移除
split() | 分割字符串

## StringBuilder
>Java编译器对String做了特殊处理，使得我们可以直接用+拼接字符串。



```
循环中使用
StringBuilder sb = new StringBuilder(1024);
for (int i = 0; i < 1000; i++) {
    sb.append(',');
    sb.append(i);
}
String s = sb.toString();
```

- 要高效拼接字符串，应该使用StringBuilder。

>类似用分隔符拼接数组的需求很常见，所以Java标准库还提供了一个StringJoiner来干这个事：

```
public class Main {
    public static void main(String[] args) {
        String[] names = {"Bob", "Alice", "Grace"};
        var sj = new StringJoiner(", ");
        for (String name : names) {
            sj.add(name);
        }
        System.out.println(sj.toString());
    }
}

```

## 数据类型

- 基本类型：byte，short，int，long，boolean，float，double，char
- 引用类型：所有class和interface类型
>引用类型可以赋值为null，表示空，但基本类型不能赋值为null：


- <p style="color: lightsalmon">enum来定义枚举类</p>

<div style="color: lightsalmon">定义的enum类型总是继承自java.lang.Enum，且无法被继承；
只能定义出enum的实例，而无法通过new操作符创建enum的实例；
定义的每个实例都是引用类型的唯一实例；
可以将enum类型用于switch语句。
enum定义的枚举类是一种引用类型
ordinal()
返回定义的常量的顺序，从0开始计数
</div>


- 工具Math类就是用来进行数学计算的，它提供了大量的静态方法来便于我们实现数学计算


## 异常处理
<div style="color: lightsalmon">一个健壮的程序必须处理各种各样的错误。
- Java内置了一套异常处理机制，总是使用异常来表示错误。</div>

<div style="color: lightsalmon">捕获异常
存在多个catch的时候，catch的顺序非常重要：子类必须写在前面</div>

```java
try {

}catch(IOException e) {

}catch(NumberFormatException e) {

}
```

<div style="color: lightsalmon">finally语句块保证有无错误都会执行。</div>

```java
public static void main(String[] args) {
    try {
        process1();
        process2();
        process3();
    } catch (UnsupportedEncodingException e) {
        System.out.println("Bad encoding");
    } catch (IOException e) {
        System.out.println("IO error");
    } finally {
        System.out.println("END");
    }
}
```

-assert 断言只能用于开发和测试 AssertionError

-日志包java.util.logging
-Commons Logging的特色是，它可以挂接不同的日志系统，并通过配置文件指定挂接的日志系统。默认情况下，Commons Loggin自动搜索并使用Log4j（Log4j是另一个流行的日志系统），如果没有找到Log4j，再使用JDK Logging。
-Log4j
-使用SLF4J和Logback


## 反射（Reflection）
>由于JVM为每个加载的class创建了对应的Class实例，并在实例中保存了该class的所有信息，
>包括类名、包名、父类、实现的接口、所有方法、字段等，因此，如果获取了某个Class实例，
>我们就可以通过这个Class实例获取到该实例对应的class的所有信息。
>这种通过Class实例获取class信息的方法称为反射（Reflection）。

- getClass 获取class
- Class.newInstance() 构造函数的局限  只有public的无参数构造
- Constructor 反射API提供了Constructor对象，它包含一个构造方法的所有信息，可以创建一个实例
- getInterfaces 获取接口
- getSuperclass 获取父类

- 动态代理功能，允许在运行期动态创建一个接口的实例；
- 动态代理是通过Proxy创建代理对象，然后将接口方法“代理”给InvocationHandler完成的


## 注解（Annotation）

- 什么是注解（Annotation）？注解是放在Java源码的类、方法、字段、参数前的一种特殊“注释”：

>第一类编译器使用的注解-SOURCE类型

```java
@Override：让编译器检查该方法是否正确地实现了覆写；
@SuppressWarnings：告诉编译器忽略此处代码产生的警告。
```

>第二类是由工具处理.class文件使用的注解，比如有些工具会在加载class的时候，对class做动态修改，实现一些特殊的功能。
这类注解会被编译进入.class文件，但加载结束后并不会存在于内存中。这类注解只被一些底层库使用，一般我们不必自己处理。-CLASS类型

>第三类是在程序运行期能够读取的注解，它们在加载后一直存在于JVM中，这也是最常用的注解。
例如，一个配置了@PostConstruct的方法会在调用构造方法后自动被调用（这是Java代码读取该注解实现的功能，JVM并不会识别该注解）。-RUNTIME类型

```java
    @Value(min=0)
    public int n;
```

- 元注解
有一些注解可以修饰其他注解，这些注解就称为元注解（meta annotation）

## 泛型

- 泛型就是定义一种模板，例如ArrayList<T>，然后在代码中为用到的类创建对应的ArrayList<类型>

```java
ArrayList<String> strList = new ArrayList<String>();
```

向上转型
在Java标准库中的ArrayList<T>实现了List<T>接口，它可以向上转型为List<T>

- 编写泛型类

```java
public class Pair<T> {
    private T first;
    private T last;
    public Pair(T first, T last) {
        this.first = first;
        this.last = last;
    }
    public T getFirst() {
        return first;
    }
    public T getLast() {
        return last;
    }
}
```

- T 不能用于静态方法,静态泛型方法应该使用其他类型区分
- 多个泛型

```java
public class Pair<T, K> {
    private T first;
    private K last;
    public Pair(T first, K last) {
        this.first = first;
        this.last = last;
    }
    public T getFirst() { ... }
    public K getLast() { ... }
}
```

- extends 通配符
- 这种使用<? extends Number>的泛型定义称之为上界通配符（Upper Bounds Wildcards）
- super通配符


## 集合
- 集合是由若干确定的元素所构成的整体

- 数学中  有限集合  无限集合

<div style="color: chocolate">既然Java提供了数组这种数据类型，可以充当集合，那么，我们为什么还需要其他集合类？这是因为数组有如下限制：
数组初始化后大小不可变；
数组只能按索引顺序存取。
因此，我们需要各种不同类型的集合类来处理不同的数据，例如：
可变大小的顺序链表；
保证无重复元素的集合；
</div>

>Collection，它是除Map外所有其他集合类的根接口。
- java.util 三种类型
- List：一种有序列表的集合，例如，按索引排列的Student的List；
- Set：一种保证没有重复元素的集合，例如，所有无重复名称的Student的Set；
- Map：一种通过键值（key-value）查找的映射表集合，例如，根据Student的name查找对应Student的Map。

- 集合总是通过统一的方式——迭代器（Iterator）来实现 不应该使用遗留类
<div style="color: blue">
Hashtable：一种线程安全的Map实现；
Vector：一种线程安全的List实现；
Stack：基于Vector实现的LIFO的栈。
</div>
- 集合类中，List是最基础的一种集合：它是一种有序链表。

- List 两种实现方式  <span style="color: chocolate">ArrayList   LinkedList</span>

- ArrayList在内部使用了数组来存储所有元素
- 在LinkedList中，它的内部每个元素都指向下一个元素：

 解析 | 	ArrayList	| 	LinkedList | 
----|------|----
获取指定元素	|   速度很快|	|需要从头开始查找元素
添加元素到末尾|	速度很快	|速度很快
在指定位置添加/删除|	需要移动元素 |	不需要移动元素
内存占用	    |少	| 较大

- 通过List 接口提供的of() 创建  //覆写equals

```java

List <Integer> list = List.of(1,2,3);

```

- 在末尾添加一个元素：void add(E e)
- 在指定索引添加一个元素：void add(int index, E e)
- 删除指定索引的元素：int remove(int index)
- 删除某个元素：int remove(Object e)
- 获取指定索引的元素：E get(int index)
- 获取链表大小

### 编写equals
- 如何正确编写equals()方法？equals()方法要求我们必须满足以下条件：

- 自反性（Reflexive）：对于非null的x来说，x.equals(x)必须返回true；
- 对称性（Symmetric）：对于非null的x和y来说，如果x.equals(y)为true，则y.equals(x)也必须为true；
- 传递性（Transitive）：对于非null的x、y和z来说，如果x.equals(y)为true，y.equals(z)也为true，那么x.equals(z)也必须为true；
- 一致性（Consistent）：对于非null的x和y来说，只要x和y状态不变，则x.equals(y)总是一致地返回true或者false；
- 对null的比较：即x.equals(null)永远返回false。

```java
class Person {
	String firstName;
	String lastName;
	int age;

	public Person(String firstName, String lastName, int age) {
		this.firstName = firstName;
		this.lastName = lastName;
		this.age = age;
	}
	
	/**
	 * TODO: 覆写equals方法
	 */
	public boolean equals(Object o) {
		if (o instanceof Person) {
	        Person p = (Person) o;
	        return Objects.equals(this.firstName+this.lastName, p.firstName+p.lastName) && this.age == p.age;
	    }
	    return false;
	}
}
```

### MAP
- Map这种键值（key-value）映射表的数据结构，作用就是能高效通过key快速查找value（元素）。
```java

Map<string Class> list = new HashMap<>();
list.put("first", Class);
Class class = list.get("first");
System.out.println(class.attribute)

```

-  Set实际上相当于只存储key、不存储value的Map。我们经常用Set用于去除重复元素。

```java
  Set<String> set = new HashSet<>();
```


- Map中不存在重复的key，因为放入相同的key，只会把原有的key-value对应的value给替换掉。
  因为HashMap是一种通过对key计算hashCode()，通过空间换时间的方式，直接定位到value所在的内部数组的索引，因此，查找效率非常高。
- Map的内部，对key做比较是通过equals()实现的
- 但如果我们放入的key是一个自己写的类，就必须保证正确覆写了equals()方法
- 通过key计算索引的方式就是调用key对象的 hashCode()方法，它返回一个int整数。HashMap正是通过这个方法直接定位key对应的value的索引，继而直接返回value。

- 正确的map 
  1：作为key的对象必须正确覆写equals()方法，相等的两个key实例调用equals()必须返回true；
  2：作为key的对象还必须正确覆写hashCode()方法，且hashCode()方法要严格遵循以下规范：
  如果两个对象相等，则两个对象的hashCode()必须相等；
  如果两个对象不相等，则两个对象的hashCode()尽量不要相等。

- EnumMap key 作为枚举类型 

```java

Map<enum String> enum = new EnumMap<>();

```

- TreeMap
  Map，它在内部会对Key进行排序，这种Map就是SortedMap。注意到SortedMap是接口，它的实现类是TreeMap。

### properties 
- 创建Properties实例；
  调用load()读取文件；
  调用getProperty()获取配置。
  
```java
    String f = "setting.properties";
    Properties props = new Properties();
    props.load(new java.io.FileInputStream(f));
    
    String filepath = props.getProperty("last_open_file");
    String interval = props.getProperty("auto_save_interval", "120");
```

- 队列queue
  queue 是一种经常使用的集合
  把元素添加到尾部，把元素从头部取出
  int size()：获取队列长度；
  boolean add(E)/boolean offer(E)：添加元素到队尾； add 抛异常  offer 不抛异常
  E remove()/E poll()：获取队首元素并从队列中删除；    remove 抛异常 poll 不抛异常
  E element()/E peek()：获取队首元素但并不从队列中删除。 element  抛异常 peek 不抛异常

```java
// 这是一个Queue:
Queue<String> queue = new LinkedList<>();
```

- PriorityQueue实现了一个优先队列：从队首获取元素时，总是获取优先级最高的元素。
  PriorityQueue默认按元素比较的顺序排序（必须实现Comparable接口），也可以通过Comparator自定义排序算法（元素就不必实现Comparable接口）

### Deque
- 允许两头都进，两头都出，这种队列叫双端队列（Double Ended Queue），学名Deque。

 解析 | 	queue	| 	deque | 
        ----|------|----
添加元素到队尾	    | add(E e) / offer(E e)	    | addLast(E e) / offerLast(E e)
取队首元素并删除	| E remove() / E poll()	E   | removeFirst() / E pollFirst()
取队首元素但不删除	| E element() / E peek()	| E getFirst() / E peekFirst()
添加元素到队首	    |   无	                    | addFirst(E e) / offerFirst(E e)
取队尾元素并删除	| 无	                    | E removeLast() / E pollLast()
取队尾元素但不删除	| 无	                    | E getLast() / E peekLast()

- stack
  栈（Stack）是一种后进先出（LIFO：Last In First Out）的数据结构。
  所谓FIFO，是最先进队列的元素一定最早出队列，而LIFO是最后进Stack的元素一定最早出Stack。如何做到这一点呢？只需要把队列的一端封死：
  因此，Stack是这样一种数据结构：只能不断地往Stack中压入（push）元素，最后进去的必须最早弹出（pop）来：
  把元素压栈：push(E)；
  把栈顶的元素“弹出”：pop(E)；
  取栈顶元素但不弹出：peek(E)。
  
- Iterator 迭代器
  因为编译器把for each循环通过Iterator改写为了普通的for循环
  我们把这种通过Iterator对象遍历集合的模式称为迭代器。
  如果我们自己编写了一个集合类，想要使用for each循环，只需满足以下条件：
  集合类实现Iterable接口，该接口要求返回一个Iterator对象；
  用Iterator对象迭代集合内部数据。

- Collections
  java.util 工具类 它提供了一系列静态方法，能更方便地操作各种集合。
  
- Collections可以对List进行排序。因为排序会直接修改List元素的位置，因此必须传入可变List
```java
public class Main {
    public static void main(String[] args) {
        List<String> list = new ArrayList<>();
        list.add("apple");
        list.add("pear");
        list.add("orange");
        // 排序前:
        System.out.println(list);
        Collections.sort(list);
        // 排序后:
        System.out.println(list);
    }
}
```

- 洗牌<div style="color: chocolate">Collections.shuffle(list);</div> PHP 中数组打乱shuffle
- 线程安全集合
  Collections还提供了一组方法，可以把线程不安全的集合变为线程安全的集合：
  
  变为线程安全的List：List<T> synchronizedList(List<T> list)
  变为线程安全的Set：Set<T> synchronizedSet(Set<T> s)
  变为线程安全的Map：Map<K,V> synchronizedMap(Map<K,V> m)
  
## IO

- 可以用.表示当前目录，..表示上级目录。

- filter模式

- zip 操作

- 序列化

## 日期与时间

## 正则表达式

## 加密与安全

### 编码算法

- ASCII码就是一种编码，字母A的编码是十六进制的0x41，字母B是0x42
  ASCII编码最多只能有127个字符，要想对更多的文字进行编码，就需要用Unicode。而中文的中使用Unicode编码就是0x4e2d，使用UTF-8则需要3个字节编码：

- URL编码
  如果字符是A~Z，a~z，0~9以及-、_、.、*，则保持不变；
  如果是其他字符，先转换为UTF-8编码，然后对每个字节以%XX表示。

-Base64编码
 URL编码是对字符进行编码，表示成%xx的形式，而Base64编码是对二进制数据进行编码，表示成文本格式。
 Base64编码可以把任意长度的二进制数据变为纯文本，且只包含A~Z、a~z、0~9、+、/、=这些字符。它的原理是把3字节的二进制数据按6bit一组，用4个int整数表示，然后查表，把int整数用索引对应到字符，得到编码后的字符串。

### 哈希算法（Hash）又称摘要算法（Digest）
- 它的作用是：对任意一组输入数据进行计算，得到一个固定长度的输出摘要。
- 哈希算法最重要的特点就是：
  相同的输入一定得到相同的输出；
  不同的输入大概率得到不同的输出。
  哈希算法的目的就是为了验证原始数据是否被篡改。




## 多线程

`一个Java程序实际上是一个JVM进程，JVM进程用一个主线程来执行main()方法，
在main()方法内部，我们又可以启动多个线程。此外，JVM还有负责垃圾回收的其他工作线程等。`

-创建线程

```java
public class Main {
    public static void main(String[] args) {
        Thread t = new Thread(new MyRunnable());
        t.start(); // 启动新线程
    }
}

class MyRunnable implements Runnable {
    @Override
    public void run() {
        System.out.println("start new thread!");
    }
}
```

-java8

```java
public class Main {
    public static void main(String[] args) {
        Thread t = new Thread(() -> {
            System.out.println("start new thread!");
        });
        t.start(); // 启动新线程
    }
}

```

- 线程状态

>New：新创建的线程，尚未执行；
Runnable：运行中的线程，正在执行run()方法的Java代码；
Blocked：运行中的线程，因为某些操作被阻塞而挂起；
Waiting：运行中的线程，因为某些操作在等待中；
Timed Waiting：运行中的线程，因为执行sleep()方法正在计时等待；
Terminated：线程已终止，因为run()方法执行完毕。

- 中断线程
- interrupt()方法

## 网络编程

- TCP

- UDP
