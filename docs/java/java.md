## Java修饰符
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