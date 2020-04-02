## 安装redis
```bash
yum --enablerepo=remi install redis
vim /etc/redis.conf
requirepass yourpassword
service redis start
```

## string
```php
$key = 'string key';
$value = 'string value';
$timeout = 60;
$redis = new Redis();
$redis->set($key,$value,$timeout); //k,v,time
$redis->get($key);
$redis->GETRANGE($key,0,3); //k,start,end 字符串取值

```

## hash
```php
$key = 'hash key';
$value = 'hash val';
$redis = new \Swoole\Coroutine\Redis();
$redis->hGet($key,$value);
```

## list
```php
$key = 'list key';
$value = 'list value';
$redis = new \Swoole\Coroutine\Redis();
$redis->lPush($key,$value); //入头
$redis->rPop($key);  //出尾
$redis->rPush($key,$value); //入尾
$redis->lPop($key); //出头
```

## set

```php
$key = 'set key';
$value = 'set value';
$redis = new Redis();
$redis->del($key); //删除
$redis->exists($key); // key 存在返回 1 ，否则返回 0 。
$redis->Expire($key); //用于设置 key 的过期时间，key 过期后将不再可用。
$redis->sIsMember($key);  //如果成员元素是集合的成员，返回 1 。 如果成员元素不是集合的成员，或 key 不存在，返回 0 。
$redis->sCard($key); //返回集合中元素的数量
$redis->sRem($key,...$value); //移除集合中的一个或多个成员元素，不存在的成员元素会被忽略。
$redis->sAdd($key,...$value); //将一个或多个成员元素加入到集合中，已经存在于集合的成员元素将被忽略
$redis->Smembers($key); //返回集合中的所有的成员。 不存在的集合 key 被视为空集合。
```

## sorted set
```php
$key = 'sorted set key';
$value = 'sorted set value';
$redis = new \Co\Redis();
$redis->zAdd($key,1,$value); //k,score,v
$redis->zCard($key); //有序集合成员数
```