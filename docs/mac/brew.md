## brew
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
## composer
```
brew install composer 

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
```
## oh my zsh命令行工具
```
sh -c "$(wget https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

```
## install nginx  
```
brew install nginx
brew services start nginx
127.0.0.1:8080
```
## 配置php-fpm
```
location ~ \.php$ {
root          html;
fastcgi_pass  127.0.0.1:9000;
fastcgi_index  index.php;
fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
include        fastcgi_params;
}
```

###error_log 修改文件


## mysql8

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
## 安装php
```
brew install php

brew services start php
```
######php-fpm /usr/local/etc/php/7.3/php-fpm.conf
###/private/etc/php-fpm.conf  error_log

```
killall php-fpm
sudo php-fpm -D
```


## install redis
```
brew install redis
```

###### pecl install redis

## swoole
```
pecl install swoole
```
###### 卸载扩展
######删除php.ini 中的 extension=swoole.so  
```
pecl uninstall swoole
```

###### 编译安装swoole
```
wget https://github.com/swoole/swoole-src/archive/v4.4.7.zip
unzip v4.2.3.zip
cd swoole-src-4.2.3
phpize
./configure --enable-async-redis --enable-mysqlnd --enable-openssl --enable-http2
make
```

###错误
```
fatal error: 'openssl/ssl.h' file not found

使用 --with-openssl-dir 参数指定 openssl 

```