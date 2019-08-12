####单例模式    单例模式解决的是如何在整个项目中创建唯一对象实例的问题
`
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
 `
####工厂模式    工厂模式解决的是如何不通过new建立实例对象的方法
`<?php
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
 $transport->go();`
####注册树模式
`<?php
 //创建单例
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

 //工厂模式
 class RandFactory{
     public static function factory(){
         return Single::getInstance();
     }
 }
 //注册树
 class Register{
     protected static $objects;
     public static function set($alias,$object){
         self::$objects[$alias]=$object;
     }
     public static function get($alias){
         return self::$objects[$alias];
     }
     public static function _unset($alias){
         unset(self::$objects[$alias]);
     }
 }
 Register::set('rand',RandFactory::factory());
 $object=Register::get('rand');
 print_r($object);`

####适配器模式
####观察者模式
`<?php
 // 主题接口
 interface Subject{
     public function register(Observer $observer);
     public function notify();
 }
 // 观察者接口
 interface Observer{
     public function watch();
 }
 // 主题
 class Action implements Subject{
      public $_observers=array();
      public function register(Observer $observer){
          $this->_observers[]=$observer;
      }

      public function notify(){
          foreach ($this->_observers as $observer) {
              $observer->watch();
          }

      }
  }

 // 观察者
 class Cat implements Observer{
      public function watch(){
          echo "Cat watches TV<hr/>";
      }
  }
  class Dog implements Observer{
      public function watch(){
          echo "Dog watches TV<hr/>";
      }
  }
  class People implements Observer{
      public function watch(){
          echo "People watches TV<hr/>";
      }
  }
 // 应用实例
 $action=new Action();
 $action->register(new Cat());
 $action->register(new People());
 $action->register(new Dog());
 $action->notify();`

