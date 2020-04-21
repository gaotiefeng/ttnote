
## mysql连接
```bash
mysql -h host -u user -p
descrlbe; desc;
load data txt插入数据
LOAD DATA LOCAL INFILE 'user.txt' INTO TABLE user;
quit 退出
```

# 基本操作

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
## insert
```mysql
insert into user
values ('1','15903430044','2020-04-21 12:00:00');
```
## alter
```mysql
alter table user add user_name varchar(32) default '' comment '名称';
alter table user drop user_name; #删除字断
alter table user modify user_name varchar(64);  ##modify修改类型不可修改字断名称
alter table user change user_name username varchar(32); ##change 可以修改名称

```

 

## 分表

## 分库


## source命令
```
use beego
source /www/beego.sql
```