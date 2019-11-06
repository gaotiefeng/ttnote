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
- 静态方法：static 静态方法经常用于工具类

#### 包
- java定义了一种名字空间，称之为包：package。一个类总是属于某个包，类名（比如Person）只是一个简写，真正的完整类名是包名.类名
- 使用package来解决名字冲突。
```
package hello

class Parson {

     void hello()
     {
     }
}
```
- import 导入包
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

#### 字符串和编码
在Java中，String是一个引用类型，它本身也是一个class。但是，Java编译器对String有特殊处理，即可以直接用"..."来表示一个字符串：
```
String a = "HELLO";
实际上字符串在String内部是通过一个char[]数组表示的，因此，按下面的写法也是可以的：

String s2 = new String(new char[] {'H', 'e', 'l', 'l', 'o', '!'});
```
- 字符串比较 equals
- 要忽略大小写比较，使用equalsIgnoreCase()方法。
```
        String a = "1";
        String b = "1";
        System.out.println(a.equals(b));
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