## 单例模式
######   单例模式解决的是如何在整个项目中创建唯一对象实例的问题
```
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
## 工厂模式
###### 工厂模式    工厂模式解决的是如何不通过new建立实例对象的方法
###### 创建你自己的方法。不要过分依赖于我给出的方法。要确定最适合你的做法！不过拜托要尽量打破常规。 ----康斯坦丁·斯坦尼斯拉夫斯基
```
<?php
// todo insterface and abstract
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


## 原型设计模式（Prototype Design Pattern) clone
###### 所谓的原创不过是深思熟虑后的模仿，最具有原创了的作家往往互相抄袭  -----伏尔泰
###### 为了与他人相似，我们舍弃了真我的四分之三  ----亚瑟·叔本华
###### 就像你的行为原则会被定为全世界的准则那样行事  ----伊曼努尔·康德
```
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
        $this->name = $name
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

## 结构设计模式
###### 适配器模式（Adapter）(类和对象)
###### 能生存下来的物种，不是最强壮的，也不是最聪明的，而是能因应环境变化的物种 --查尔斯·达尔文

###### 注册树模式

```
<?php
 //创建单例  
 ```
 
###### 观察者模式

```
<?php
 //主题接口
 ```
