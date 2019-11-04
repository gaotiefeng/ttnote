#### 单例模式    单例模式解决的是如何在整个项目中创建唯一对象实例的问题
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
#### 工厂模式    工厂模式解决的是如何不通过new建立实例对象的方法
```
<?php
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

- 原型设计模式（Prototype Design Pattern)
###### 所谓的原创不过是深思熟虑后的模仿，最具有原创了的作家往往互相抄袭  -----伏尔泰
###### 为了与他人相似，我们舍弃了真我的四分之三  ----亚瑟·叔本华
###### 就像你的行为原则会被定为全世界的准则那样行事  -----伊曼努尔·康德
```

```
