###### oop
#### 构造方法 
>字符串型的数组 变量 args

```
public static void main(String[] args) {
        
    }
```
#### 方法重载
>在一个类中，我们可以定义多个方法。如果有一系列方法，它们的功能都是类似的，只有参数有所不同，那么，可以把这一组方法名做成同名方法

#### 继承extends
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
覆写Object方法
因为所有的class最终都继承自Object，而Object定义了几个重要的方法：
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

#### 抽象类（abstract class）
- 这种尽量引用高层类型，避免引用实际子类型的方式，称之为面向抽象编程。
- 面向抽象编程的本质就是：
- 上层代码只定义规范（例如：abstract class Person）；
- 不需要子类就可以实现业务逻辑（正常编译）；
- 具体的业务逻辑由不同的子类实现，调用者并不关心。

#### 接口
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

#### 包
- java定义了一种名字空间，称之为包：package。一个类总是属于某个包，类名（比如Person）只是一个简写，真正的完整类名是包名.类名
- 使用package来解决名字冲突。
- import 导入包
```
package hello

class Parson {

     void hello()
     {
     }
}
```

#### 作用域
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

#### 模块

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
######数组所有元素初始化为默认值，整型都是0，浮点型是0.0，布尔型是false；
######数组一旦创建后，大小就不可改变。
######要访问数组中的某一个元素，需要使用索引。数组索引从0开始，例如，5个元素的数组，索引范围是0~4。
######可以修改数组中的某一个元素，使用赋值语句，例如，ns[1] = 79;。
######可以用数组变量.length获取数组大小：
```
int[] ns = new int[5];
ns[0] = 1;
ns[1] = 1;
ns[2] = 1;
ns[3] = 1;
ns[4] = 1;
```

######字符串数组

#### 流程控制

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

#### 输入
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

- if
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
>判断值类型的变量是否相等，可以使用==
######两个String类型，它们的内容是相同的，但是，分别指向不同的对象，用==判断，结果为false
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

##算法

```
public static int n(int n) {

        if(n< 2) {
            return  n;
        }
        int pre1 = 1;
        int pre2 = 2;
        int sum = 0;
        for (int i = 2; i < n; i++){
            sum =  pre1 + pre2;
            pre1 = pre2;
            pre2 = sum;
         }
        return sum;
    }
```