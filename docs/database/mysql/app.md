
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
- 通常创建索引 `单列索引`  || `组合索引` 最左原则-index(a,b,c) where a=1,b=1,c=1 条件应该按照组合索引的顺序来写

## explain
```mysql
explain select * from user where mobile='15955559999';
```

![explain](explain.png)

- 11个字断
- 1.0 id 选择标识符
- 1.1 select_type 查询类型 
- 1.1.0 simple 简单select 不使用union或者子查询
- 1.1.1 primary 子查询中最外层查询，查询中若包含任何复杂的子部分
- 1.1.2 union union中第二个或后边的select
- 1.1.3 dependent union union中第二个或者后边的select，取决于外面的查询
- 1.1.4 union result union的结果， union语句中第二个select开始后面所有的select
- 1.1.5 subquery 子查询中第一个select
- 1.1.6 dependent subquery 子查询中的第一个select, 依赖于外部查询
- 1.1.7 derived 派生表的select,from子句的子查询
- 1.1.8 uncacheable subquery 子查询的结果不能被缓存，必须重新评估链接的第一行

- 1.2 table 表
- 1.3 type  访问类型

- 1.3.0 all 遍历全表
- 1.3.1 index 遍历索引树
- 1.3.2 range 只检索给定范围行，使用一个索引来选择
- 1.3.3 ref 连接匹配条件，
- 1.3.4 er_ref 使用primary key 或者 unique key 作为条件
- 1.3.5 const/system 
- 1.3.6 null 

- 1.4 possible_keys 查询字段若存在索引 则显示该索引，但不一定被查询使用
- 1.5 key 使用索引，必然包含在possible_keys 中
- 1.6 key_len 索引字段的最大可能长度并非实际长度
- 1.7 ref 列或常量被用于查找索引列上的值
- 1.8 rows 结果集行数
- 1.9 filtered 存储引擎返回的数据在server层过滤后，剩下多少满足查询的记录数量的比例
- 2.0 extra 额外的信息说明

## 分表


## 分库


## source命令
```
use beego
source /www/beego.sql
```