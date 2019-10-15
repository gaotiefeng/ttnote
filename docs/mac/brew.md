###### brew
```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

```
brew search 
brew list
brew info
sudo brew update
brew -v
brew -h
``` 
###### composer
```
brew install composer 

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
```
###### oh my zsh命令行工具
```
sh -c "$(wget https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

```
###### install nginx  127.0.0.1:8080
```
brew install nginx
brew services start nginx
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
