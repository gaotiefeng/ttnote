## mysql

- mysql 源

- 官方源[https://dev.mysql.com/downloads/repo/yum/](https://dev.mysql.com/downloads/repo/yum/)

- 官方源[http://repo.mysql.com/yum/](http://repo.mysql.com/yum/)

- 系统是centos7，选择el7版本

- .repo

```file
[mysql56-community]
name=MySQL 8.0 Community Server
baseurl=http://repo.mysql.com/yum/mysql-8.0-community/el/8/$basearch/
enabled=1    
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-mysql
```


- 安装mysql源

```bash
yum -y localinstall http://dev.mysql.com/get/mysql57-community-release-el7-7.noarch.rpm   
```

## 安装
```bash
yum -y install mysql-community-server mysql-community-devel
```

```bash
systemctl start mysqld
systemctl enable mysqld
```
#### 查看密码
```bash
grep 'temporary password' /var/log/mysqld.log
```

```
####密码设置为mysql.
set global validate_password_policy=0;
set global validate_password_length=1;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'mysql.';
```

## 安装包处理

###### 下载mysql包

```bash
  https://dev.mysql.com/downloads/mysql/mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz
```
###### 解压包

```
  tar -zxvf mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz
  mv mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz /usr/local/mysql
```
  
######  添加my.cnf

```
[mysqld]
basedir=/usr/local/mysql
datadir=/usr/local/mysql/data
port = 3306
socket=/tmp/mysql.sock
symbolic-links=0
log-error=/var/log/mysqld.log
pid-file=/tmp/mysqld/mysqld.pid
sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'
[client]
default-character-set=utf8
[mysql]
default-character-set=utf8
[mysqld]
log-bin=mysql-bin 
binlog-format=ROW 
server_id=1 
max_connections=1000
init_connect='SET collation_connection = utf8_unicode_ci'
init_connect='SET NAMES utf8'
character-set-server=utf8
collation-server=utf8_unicode_ci
skip-character-set-client-handshake
```

###### 创建mysql组和mysql用户

```
groupadd mysql
useradd -r -g mysql mysql
chown -R mysql:mysql /usr/local/mysql
touch /tmp/mysql.sock
chown mysql:mysql /tmp/mysql.sock
chmod 755 /tmp/mysql.sock
/tmp/mysqld/mysqld.pid
chown mysql:mysql /tmp/mysqld/mysqld.pid
chmod 755 /tmp/mysqld/mysqld.pid
touch /var/log/mysqld.log
```

###### 初始化数据库:

```./mysqld --initialize --user=mysql --basedir=/usr/local/mysql--datadir=/usr/local/mysql/data```

###### 安全启动:

```./mysqld_safe --user=mysql &```

###### 问题

```[ERROR] Could not open file '/var/log/mysqld.log' for error logging: Permission denied```

###### 日志文件设置权限777
###### 开机启动服务

```
cp -a /usr/local/mysql/support-files/mysql.server /etc/init.d/mysql
chkconfig --list mysql
chkconfig --add mysql
```

###### 创建快捷方式

```
ln -s /usr/local/mysql/bin/mysql /usr/bin
```

###### 修改密码

```
set password=password("tf2019");
UPDATE user SET authentication_string=PASSWORD('qingchen2019') where USER='root';
```
###### 远程访问权限

```
grant all privileges on *.* to 'root'@'%' identified by 'qingchen2019';
flush privileges;
systemctl stop firewalld.service
```            


## 忘记密码
###### 修改my.conf


 ```
[mysqld]
skip-grant-tables
```

###### 修改密码

```
update mysql.user set authentication_string = password('qingchen2019') where user='root';
```