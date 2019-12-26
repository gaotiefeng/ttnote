## 安装java

######centos

```
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


## oop
## 构造方法 
>字符串型的数组 变量 args

```
public static void main(String[] args) {
        
    }
```
## 方法重载
>在一个类中，我们可以定义多个方法。如果有一系列方法，它们的功能都是类似的，只有参数有所不同，那么，可以把这一组方法名做成同名方法

## 继承extends
>超类（super class），父类（parent class），基类（base class）
>引用父类

```
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

##抽象类（abstract class）
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

## 流程控制

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
<p style="color: #FF8A96">String类</p>
<p style="color: #FF8A96">StringBuilder中新增字符时，不会创建新的临时对象</p>
<p style="color: #FF8A96">StringJoiner 类似用分隔符拼接数组的需求很常见</p>
<p style="color: #FF8A96">JavaBean主要用来传递数据</p>
<p style="color: #FF8A96">使用enum来定义枚举类</p>
<p style="color: #FF8A96">BigInteger由CPU原生提供的整型最大范围是64位long型整数。使用long型整数可以直接通过CPU指令进行计算，速度非常快。</p>
<p style="color: #FF8A96">BigDecimal可以表示一个任意大小且精度完全准确的浮点数</p>
<p style="color: #FF8A96">Math类就是用来进行数学计算的；Random用来创建伪随机数；SecureRandom就是用来创建安全的随机数的</p>

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


- <p style="color: cornflowerblue">enum来定义枚举类</p>

<div style="color: gold">定义的enum类型总是继承自java.lang.Enum，且无法被继承；
只能定义出enum的实例，而无法通过new操作符创建enum的实例；
定义的每个实例都是引用类型的唯一实例；
可以将enum类型用于switch语句。
enum定义的枚举类是一种引用类型
ordinal()
返回定义的常量的顺序，从0开始计数
</div>


- 工具Math类就是用来进行数学计算的，它提供了大量的静态方法来便于我们实现数学计算


## 异常处理
<div style="color: lightsalmon">一个健壮的程序必须处理各种各样的错误。</div>
- Java内置了一套异常处理机制，总是使用异常来表示错误。

<div style="color: lightsalmon">捕获异常</div>
存在多个catch的时候，catch的顺序非常重要：子类必须写在前面

```
try {

}catch(IOException e) {

}catch(NumberFormatException e) {

}
```

<div style="color: lightsalmon">finally语句块保证有无错误都会执行。</div>

```
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


## 反射


## 注解（Annotation）


## 泛型



## 集合

>Collection，它是除Map外所有其他集合类的根接口。
- java.util 三种类型
- List：一种有序列表的集合，例如，按索引排列的Student的List；
- Set：一种保证没有重复元素的集合，例如，所有无重复名称的Student的Set；
- Map：一种通过键值（key-value）查找的映射表集合，例如，根据Student的name查找对应Student的Map。

## IO

## 加密安全


## 多线程

`一个Java程序实际上是一个JVM进程，JVM进程用一个主线程来执行main()方法，
在main()方法内部，我们又可以启动多个线程。此外，JVM还有负责垃圾回收的其他工作线程等。`

-创建线程

```
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

```
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