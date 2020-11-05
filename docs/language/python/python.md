## 安装

###### pip
```bash
sudo apt-get install python3-pip
pip3 --version
pip3 --help
```

###### window
```
https://www.python.org/downloads/windows/

pip install numpy -i http://pypi.douban.com/simple --trusted-host pypi.douban.com
```

## 函数
* 以def关键词开头,后接函数标识符名称和()
* 任何传入参数和自变量必须放在圆括号中间，圆括号之间可以用于定义参数。
* 函数内容以冒号 : 起始，并且缩进。
* return [表达式] 结束函数，选择性地返回一个值给调用方，不带表达式的 return 相当于返回 None。
```
def test()
    a = 1
    return a
```
- 关键字参数
    - 关键字参数和函数调用关系紧密，函数调用使用关键字参数来确定传入的参数值。
    - 使用关键字参数允许函数调用时参数的顺序与声明时不一致，因为 Python 解释器能够用参数名匹配参数值。
    
```
#!/usr/bin/python3
#可写函数说明
def printinfo( name, age = 35 ):
   "打印任何传入的字符串"
   print ("名字: ", name)
   print ("年龄: ", age)
   return
printinfo( age=50, name="runoob" )
```

- 不定长参数
    - 你可能需要一个函数能处理比当初声明时更多的参数。这些参数叫做不定长参数
    
```
#!/usr/bin/python3
# 可写函数说明
def printinfo( arg1, *vartuple ):
   "打印任何传入的参数"
   print ("输出: ")
   print (arg1)
   print (vartuple)
printinfo( 70, 60, 50 )
```

    ### 匿名函数
    lambda 来创建匿名函数。
    
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

## 数据结构
* 列表
```python
list.append(x) #元素插入列表的结尾a[len(a):]=[x]
```
    
    
## 数据库驱动
`pip install mysql-connector`
`pip3 install PyMySQL`