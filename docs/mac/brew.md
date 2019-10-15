###### brew

###### composer
```
brew install composer 

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
```

###### mysql8

```
brew install mysql

brew services start mysql  #启动服务

mysql_secure_installation   #使用安全安装

```
###### 添加用户给%权限
```
CREATE user 'root'@'%' IDENTIFIED BY 'tf2019..';
grant all privileges on *.* to 'root'@'%';
```
###### 密码验证修改
```
alter user 'root'@'%' identified with mysql_native_password by 'Gtf2019.';
```
###### 涮新权限
```
flush privileges;
```
