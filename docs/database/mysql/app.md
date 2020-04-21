
## mysql连接
```bash
mysql -h host -u user -p
descrlbe; desc;
load data txt插入数据
LOAD DATA LOCAL INFILE 'user.txt' INTO TABLE user;
quit 退出
```

# 基本操作
- like
- union连接两个select `select name from user union select name form teach` 重复的名字会去掉
- 排序 order by  `asc desc` 生序或者降序
- 分组 group by column 
-     with rollup 可以实现在分组统计数据基础上再进行相同的统计（sum,avg,count） 
-     coalesce 来设置一个可以取代null的名称
- join inner join   内连接   `两个表中字断匹配关系`
       left join    左连接    `左表所有记录`
       right join   右连接   `右表所有记录`
       ```
       select u.mobile from user as u inner join teach as t on u.id = t.user_id;
       ```
-  null 使用 is null 或者 is not null 运算符  where id is not null 查询id为NULL的值不会显示出来

## create
```mysql
create database job; #创建数据库
use job; 
show tables;
create table user (
id int(10),
mobile varchar(16) default '' comment '手机号',
created datetime default null,
primary key ('id')) comment 'user表';
```
## select
```mysql
select * from user;
select MAX(id) from user;
```

## regexp
- 正则匹配
```mysql
select name from user where name regexp '^f';
#^ 字断以f开头的所有数据
#$ filed 以 'f$' f为结果的所有数据
#'f' filed 包含'f'字符串的所有数据
```

## insert
```mysql
insert into user
values (1,'15903430044','2020-04-21 12:00:00');
```
## update
```mysql
update user set mobile='15900003333' where id=1;
```
## delete
```mysql
delete from user where id=2;
```
## alter
```mysql
alter table user add user_name varchar(32) default '' comment '名称';
alter table user drop user_name; #删除字断
alter table user modify user_name varchar(64);  ##modify修改类型不可修改字断名称
alter table user change user_name username varchar(32); ##change 可以修改名称

```

## 事务
- mysql 事务只有数据库引擎为innodb才支持事务
- 事务用来管理insert,update,delete
###### 满足事务的4个条件
- 原子性
- 一致性
- 隔离性
- 持久性
- set autocommit = 0禁止自动提交1开启自动提交
```mysql
begin ;#开启事务
insert into user values (2,'15900008888','2020-4-03');
commit;#提交事务
rollback ;#回滚事务
```

## 索引

## 分表

## 分库


## source命令
```
use beego
source /www/beego.sql
```