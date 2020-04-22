
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
- join inner join   内连接     两个表中字断匹配关系
-       left join    左连接    左表所有记录
-       right join   右连接    右表所有记录
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
alter table user add primary key ('id'); #添加主键

```
## key
- 1.0主键 primary key 每个表只能定义一个主键，
- 1.1复合主键 primary key [filed,filed,filed]
- 1.2外键  foreign key `constraint user_dep_id foreign key(user_id) references user(id) `
- 父表定义的主键
>外键是表的一个字段，不是本表的主键，但对应另一个表的主键。定义外键后，不允许删除另一个表中具有关联关系的行。


```mysql
create table user (
    id int(10) not null primary key comment 'id',
    name varchar(30) default '' comment '名称'
);
create table user_dep (
    id int(10) not null primary key,
    user_id int(10) not null,
    created_at datetime,
    name varchar(32) default '',
    constraint user_dep_id foreign key(user_id) references user(id) 
);
```

- 1.3唯一索引 unique 要求该列唯一，允许为空，但只能出现一个空值
`constraint unique_name unique(mobile)`
## 事务
- mysql 事务只有数据库引擎为innodb才支持事务
- 事务用来管理insert,update,delete
- 满足事务的4个条件
- 1.原子性
- 2.一致性
- 3.隔离性
- 4.持久性
- set autocommit = 0禁止自动提交1开启自动提交
```mysql
begin ;#开启事务
insert into user values (2,'15900008888','2020-4-03');
commit;#提交事务
rollback ;#回滚事务
```

## 索引
- 顺序访问-全表扫描
- 索引访问
>索引存储指定数据值的指针
- 1.0普通索引
- 1.1唯一性索引
- 1.2主键索引
- 1.3空间索引
- 1.4全文索引（varchar || text）
- 通常创建索引 `单列索引`  || `组合索引`

## 分表

## 分库


## source命令
```
use beego
source /www/beego.sql
```