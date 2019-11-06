###### oop
## 构造方法 字符串型的数组 变量 args
```
public static void main(String[] args) {
        
    }
```
## 方法重载
######在一个类中，我们可以定义多个方法。如果有一系列方法，它们的功能都是类似的，只有参数有所不同，那么，可以把这一组方法名做成同名方法

## 继承extends
######超类（super class），父类（parent class），基类（base class）
######引用父类
```
class Person {
    protected String name;
}
class Student extends Person {
    super.name  this.name  name  //调用都是一样的
} 
```
- 问题 子类不会继承任何父类的构造方法。子类默认的构造方法是编译器自动生成的，不是继承的。
######向上转型（upcasting）。 Person p = new Student() 向上转型实际上是把一个子类型安全地变为更加抽象的父类型：
######继承树是Student > Person > Object，所以，可以把Student类型转型为Person，或者更高层次的Object
######向下转型（downcasting）如果把一个父类类型强制转型为子类类型，就是向下转型（downcasting）。
###### Java提供了instanceof操作符，
######继承是is关系，组合是has关系。
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
######final修饰的方法可以阻止被覆写；
######final修饰的class可以阻止被继承；
######final修饰的field必须在创建对象时初始化，随后不可修改。

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
######所谓interface，就是比抽象类还要抽象的纯抽象接口，因为它连字段都不能有。因为接口定义的所有方法默认都是public abstract的，所以这两个修饰符不需要写出来（写不写效果都一样）。
######一个interface可以继承自另一个interface。interface继承自interface使用extends

###### Java修饰符
像其他语言一样，Java可以使用修饰符来修饰类中方法和属性。主要有两类修饰符：

访问控制修饰符 : default, public , protected, private

非访问控制修饰符 : final, abstract, static, synchronized

Java 变量
Java 中主要有如下几种类型的变量
局部变量
类变量（静态变量）
成员变量（非静态变量）


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