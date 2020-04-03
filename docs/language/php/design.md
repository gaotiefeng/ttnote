## 创建型设计模式

## 抽象工厂 abstractFactory

![](app/Factory/abstractFactory/abstractFactory.jpg)

> 在不指定具体类的情况下创建一系列相关或依赖对象。通常，
> <span style="color:red;">创建的类都实现同一个接口。</span>抽象工厂的客户机并不关心这些对象是如何创建的，它只知道它们是如何组合在一起的。

[抽象工厂代码](https://github.com/gaotiefeng/ttnote/tree/master/docs/language/php/app/Factory/)

## 生成器模式

>生成器的目的是将复杂对象的创建过程（流程）进行抽象，生成器表现为接口的形式。
在特定的情况下，比如如果生成器对将要创建的对象有足够多的了解，那么代表生成器的接口(interface)可以是一个抽象类(也就是说可以有一定的具体实现，就像众所周知的适配器模式)。
如果对象有复杂的继承树，理论上创建对象的生成器也同样具有复杂的继承树。
>
![](app/Builder/builder.png)

[生成器代码](https://github.com/gaotiefeng/ttnote/tree/master/docs/language/php/app/Builder/)

## 工厂模式
- 创建你自己的方法。不要过分依赖于我给出的方法。要确定最适合你的做法！不过拜托要尽量打破常规。 ----康斯坦丁·斯坦尼斯拉夫斯基
- 这个模式是一个 “真正” 的设计模式，因为它遵循了依赖反转原则（Dependency Inversion Principle “D” 代表了真正的面向对象程序设计。
- 它意味着工厂方法类依赖于类的抽象，而不是具体将被创建的类，这是工厂方法模式与简单工厂模式和静态工厂模式最重要的区别

![](app/Factory/Factory/factory.png)

[工厂代码](https://github.com/gaotiefeng/ttnote/tree/master/docs/language/php/app/Factory/Factory/)


```php
<?php
// todo insterface and abstractFactory
 interface Transport{
     public function go();

 }
 class Bus implements Transport{
     public function go(){
         echo "bus每一站都要停";
     }
 }
 class Car implements Transport{
     public function go(){
         echo "car跑的飞快";
     }
 }
 class Bike implements Transport{
     public function go(){
         echo "bike比较慢";
     }
 }
 class transFactory{
     public static function factory($transport)
     {

         switch ($transport) {
             case 'bus':
                 return new Bus();
                 break;

             case 'car':
                 return new Car();
                 break;
             case 'bike':
                 return new Bike();
                 break;
         }
     }
 }
 $transport=transFactory::factory('car');
 $transport->go();
 ```

## 单例模式
> 单例模式解决的是如何在整个项目中创建唯一对象实例的问题


```php
class Single{
     public $hash;
     static protected $ins=null;
     final protected function __construct(){
         $this->hash=rand(1,9999);
     }

     static public function getInstance(){
         if (self::$ins instanceof self) {
             return self::$ins;
         }
         self::$ins=new self();
         return self::$ins;
     }
 }
 ```




## 原型设计模式（Prototype Design Pattern) clone
###### 所谓的原创不过是深思熟虑后的模仿，最具有原创了的作家往往互相抄袭  -----伏尔泰
###### 为了与他人相似，我们舍弃了真我的四分之三  ----亚瑟·叔本华
###### 就像你的行为原则会被定为全世界的准则那样行事  ----伊曼努尔·康德

```php
<?php

abstract class Iproto {
    protected $name;

    abstract function __clone();

    abstract function setName();
    abstract function getName();
}
// todo 多个创建
class A extends Iproto {
    
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    function __clone(){}
}

class Client {
    private $name;
    private $a;

    public function __construct()
    {
        $this->a = new a();
        $a = clone $this->a;
        $a->setName('this is clone');
        $this->name = $a->geName();
    }
}
```


## 注册模式
>注册模式，解决全局共享和交换对象。已经创建好的对象，挂在到某个全局可以使用的数组上，在需要使用的时候，直接从该数组上获取即可。将对象注册到全局的树上。任何地方直接去访问。

## 适配器模式
>定义一个接口(有几个方法，以及相应的参数)。然后，有几种不同的情况，就写几个类实现该接口。将完成相似功能的函数，统一成一致的方法。


## 结构设计模式
> 适配器模式（Adapter）(类和对象)
> 能生存下来的物种，不是最强壮的，也不是最聪明的，而是能因应环境变化的物种 --查尔斯·达尔文


```
<?php
 //创建单例  
 ```
 
## 观察者模式

```
<?php
 //主题接口
 ```
