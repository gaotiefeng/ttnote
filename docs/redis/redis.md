###安装redis
```
yum --enablerepo=remi install redis
vim /etc/redis.conf
requirepass yourpassword
service redis start
```

## 集合
```2
$redis = new Redis();
$redis->del($key) //删除
$redis->exists($key) // key 存在返回 1 ，否则返回 0 。
$redis->Expire($key) //用于设置 key 的过期时间，key 过期后将不再可用。
$redis->sIsMember($key)  //如果成员元素是集合的成员，返回 1 。 如果成员元素不是集合的成员，或 key 不存在，返回 0 。
$redis->sCard($key) //返回集合中元素的数量
$redis->sRem($key,...$value) //移除集合中的一个或多个成员元素，不存在的成员元素会被忽略。
$redis->sAdd($key,...$value) //将一个或多个成员元素加入到集合中，已经存在于集合的成员元素将被忽略
$redis->Smembers($key) //返回集合中的所有的成员。 不存在的集合 key 被视为空集合。
```