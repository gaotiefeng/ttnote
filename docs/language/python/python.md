## 安装

## pip
```bash
sudo apt-get install python3-pip
pip3 --version
pip3 --help
```

### window
```
https://www.python.org/downloads/windows/

pip install numpy -i http://pypi.douban.com/simple --trusted-host pypi.douban.com
```

## Python3 面向对象
* 类class
* 方法
    - 类中函数
* 类变量
    * 类变量在整个实例化的对象中是公用的。类变量定义在类中且在函数体之外。类变量通常不作为实例变量使用。
* 数据成员
    * 类变量或者实例变量用于处理类及其实例对象的相关的数据。
* 方法重写
    - 如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。
* 局部变量
    - 定义在方法中的变量，只作用于当前实例的类。
* 实例变量
    - 在类的声明中，属性是用变量来表示的，这种变量就称为实例变量，实例变量就是一个用 self 修饰的变量。
* 继承
    - 即一个派生类（derived class）继承基类（base class）的字段和方法。继承也允许把一个派生类的对象作为一个基类对象对待。
* 实例化
    - 创建一个类的实例，类的具体对象。
* 对象
    - 通过类定义的数据结构实例。对象包括两个数据成员（类变量和实例变量）和方法。
    
## 数据库驱动
`pip install mysql-connector`
`pip3 install PyMySQL`